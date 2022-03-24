<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','middlename','gender','phone','alt_phone','email','course','highest_qualification'
    ];

    protected $table = 'enrollment';

    public $timestamps = false;
}
