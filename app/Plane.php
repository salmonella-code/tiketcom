<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable =[
        'brand_plane', 'description_plane', 'logo_plane'
    ];
}
