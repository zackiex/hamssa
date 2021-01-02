<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSettingAdmin extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
