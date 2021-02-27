<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'name',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
