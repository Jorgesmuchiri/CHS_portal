<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class System extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('email');
            $table->string('course');
            $table->string('highest_qualification');
            $table->timestamps();
     
        });


        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('email');
            $table->string('course');
            $table->string('highest_qualification');
            $table->timestamps();
     
        });


            Schema::create('enrollment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('email');
            $table->string('course');
            $table->string('highest_qualification');
            $table->timestamps();
     
        });


           Schema::create('course_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->timestamps();
     
        });

         Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->string('category_id');
            $table->string('duration');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('total_seats');
            $table->string('status');
            $table->timestamps();
     
        });
         Schema::create('popular_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->string('image');
            $table->string('category_id');
            $table->string('description');
            $table->string('status');
            $table->timestamps();
     
        });
      
        Schema::create('announcement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('announcement_date');
            $table->timestamps();
     
        });
        
        Schema::create('enquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();
     
        });

         Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name');
            $table->string('venue');
            $table->string('event_date');
            $table->string('event_time');
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
        //
    }
}
