<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopularCourses extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'course_name','image','category','description','status'
    ];

    protected $table = 'popular_courses';

    public $timestamps = false;
}
