<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'team_logo',
        'country',
        'founded_at',
    ];

    protected $casts = [
        'founded_at' => 'date',
    ];
}
