<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title','description','announcement_date'
    ];

    protected $table = 'announcements';

    public $timestamps = false;
}
