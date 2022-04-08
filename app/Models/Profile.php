<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function contact(){

        return $this->hasOne(Contact::class);
    }
    public function location(){

        
        return $this->morphOne(Location::class, 'locationable');
    }
   
    public function resume(){

        return $this->hasMany(Resume::class);
    }
    public function education(){

        return $this->hasMany(Education::class);
    }
    public function experience(){

        return $this->hasMany(Experience::class);
    }

    public function profile_picture(){

        return $this->hasOne(Media::class, 'id', 'picture_id');

    }
    public function background_picture(){

        return $this->hasOne(Media::class, 'id', 'background_picture_id');

    }
    public function pronounce_name(){

        return $this->hasOne(Media::class, 'id', 'pronounce_name_id');

    }
}
