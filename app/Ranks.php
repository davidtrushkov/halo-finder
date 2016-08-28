<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranks extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'startXp', 'rank_id', 'rank',
    ];

}