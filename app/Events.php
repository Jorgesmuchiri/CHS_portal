<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'event_name','venue','event_date','event_time'
    ];

    protected $table = 'events';

    public $timestamps = false;
}
