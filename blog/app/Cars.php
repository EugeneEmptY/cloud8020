<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cars;
use App\Car_fleets;

class Cars extends Model
{
    // Table Name
    protected $table = 'cars';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = 'true';

    public function car_fleets(){

        return $this->belongsToMany(Car_fleets::class, 'car_fleets_cars')->withTimestamps();
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
} 
