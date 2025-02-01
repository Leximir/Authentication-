<?php

namespace App\Http\Controllers;

use App\Models\CityTemperatureModel;
use Illuminate\Http\Request;

class CityTemperatureController extends Controller
{
    public function index(){
        return view('forecast' , [
            'pageTitle' => 'Daily Forecast' ,
            'allCities' => CityTemperatureModel::all()
        ]);
    }
}
