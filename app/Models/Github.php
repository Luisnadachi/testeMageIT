<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    protected $table = 'githubs';

    protected $fillable = [
        'name',
        'url_profile'
    ];
}
