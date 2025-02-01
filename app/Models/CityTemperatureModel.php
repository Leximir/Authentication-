<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityTemperatureModel extends Model
{
    protected $table = 'city temperature';

    protected $fillable = [
        'city' , 'temperature'
    ];
}
