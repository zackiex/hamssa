<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutAdmin extends Model
{
    protected $fillable = [
        'adresse',
        'adresse_ar',
        'telephone',
        'telephone2',
        'fax',
        'telephonefixe',
        'Gèolocalisation',
        'tempstravail_ar',
        'tempstravail_en',
        'tempstravail_fr',
        'email',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
    ];
}
