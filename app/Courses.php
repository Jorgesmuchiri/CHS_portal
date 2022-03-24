<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'course_name','category','duration','start_date','end_date','total_seat','status'
    ];

    protected $table = 'courses';

    public $timestamps = false;
}
