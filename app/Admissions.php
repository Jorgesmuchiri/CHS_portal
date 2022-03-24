<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;


class Admissions extends Model
{

      use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'fname','lname','middlename','gender','phone','alt_phone','email','course','highest_qualification'
    ];

    protected $table = 'admissions';

    public $timestamps = false;
}
