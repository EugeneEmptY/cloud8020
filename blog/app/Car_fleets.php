<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cars;
use App\Car_fleets;

class Car_fleets extends Model
{
    // Table Name
    protected $table = 'car_fleets';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = 'true';


    public function cars(){

        return $this->belongsToMany(Cars::class, 'car_fleets_cars')->withTimestamps();
    }
}
