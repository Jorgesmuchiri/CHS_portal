<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','category','expertise_level','description','rate','transport','lunch','fname','lname','phone','email'
    ];

    protected $table = 'jobs';

    public $timestamps = false;
}
