<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAdmin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
}
