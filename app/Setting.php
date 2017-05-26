<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'about_us',
        'about_conference',
        'about_event',
        'ticket_link',
        'address',
        'land_line',
        'mobile',
        'email',
        'site_title',
        'meta_description',
        'favicon',
        'latitude',
        'longitude',
        'instagram',
        'telegram',
    ];
}
