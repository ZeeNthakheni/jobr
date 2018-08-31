<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\UserInfo;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        return view('pages.users.view');
    }

    public function update(Request $request, User $user)
    {
        $this -> validate($request,[
            'name' => 'required',
            'email' => 'required',
            'proPicture' => 'image|nullable|max:7999' 
         ]);  

          //Handle File Upload
        if($request->hasFile('proPicture')){

            //Get filename with extension
            $fileNameWithExt = $request->file('proPicture')->getClientOriginalName();
            //Get filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get file extension 
            $fileExt = $request->file('proPicture')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            //Upload Image
            $path = $request->file('proPicture')->storeAs('public/UserImages',$fileNameToStore);
            // run php artisan storage:link to link storage folder with public, run only once.
            $fileNameActual = $request->file('proPicture')->getClientOriginalName();
        } else {
            $fileNameToStore = 'no_image.png';
            $fileNameActual = 'no_image.png';
        }

        //Create user
        $user = Auth::user();
        
        if(empty($userInfo = $user->userInfo)){
            $info = new UserInfo;
            $info->user_id = $user->id;
            $info->position = 'None';
            $info->proPicture = 'None';
            $info->proPictureName = 'None';

            $userInfo = $info;
            $info->save();
        }else{
          $userInfo = $user->userInfo;  
        }

        
        
        //Assign values
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $userInfo->position = $request->input('position');
        //Getting user id
        $user_id = auth()->user()->id;
        //Save cover image

        if($request->hasFile('proPicture')){
            if($userInfo->proPicture != 'no_image.png'){
              //Delete old image
              Storage::delete('public/UserImages/'.$userInfo->proPicture);
            }
              //Assign new image
              $userInfo->proPicture = $fileNameToStore; 
              $userInfo->proPictureName = $fileNameActual;  
        }

        $userInfo->save();
        //Save user
        $user->save();
        //Redirect
        return redirect('/user-view')->with('success','User Updated');
    }
}
