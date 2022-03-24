<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'fname','lname','phone','email','password','account_type'
,'cv','good_conduct','identification_number','county','district','proffesion'];

    protected $table = 'workers';

    public $timestamps = false;
}
