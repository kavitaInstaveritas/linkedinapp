<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public function profile(){

        return $this->belongsTo(Profile::class);
    }
    public function field(){

        return $this->hasOne(Field::class);
    }
    public function university(){

        return $this->hasOne(University::class);
    }
    public function media()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }
}
