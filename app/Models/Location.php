<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    // public function profile(){

    //     return $this->belongsTo(Profile::class);
    // }


    public function locationable()
    {
        return $this->morphTo(__FUNCTION__, 'locationable_type', 'locationable_id');
    }
    public function city(){

        return $this->hasOne(City::class);
    }
    public function state(){

        return $this->hasOne(State::class);
    }
    public function country(){

        return $this->hasOne(Country::class);
        
    }
}
