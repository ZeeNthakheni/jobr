<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('jobTitle');
            $table->longText('responsibilities');
            $table->longText('attributes');
            $table->longText('qualifications');
            $table->string('location');
            $table->string('salary');
            $table->date('closingDate');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->string('category');
            $table->string('status');
            $table->string('company_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
