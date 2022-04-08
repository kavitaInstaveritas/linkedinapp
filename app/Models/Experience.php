<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public function profile(){

        return $this->belongsTo(Profile::class);
    }
    public function position(){

        return $this->hasOne(Position::class);
    }
    public function organization(){

        return $this->hasOne(Organization::class);
    }
    public function industry(){

        return $this->hasOne(Industry::class);
    }
    public function location(){

        return $this->morphOne(Location::class, 'locationable');
    }
}

