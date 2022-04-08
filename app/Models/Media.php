<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    public function mediaable()
    {
        return $this->morphTo(__FUNCTION__, 'mediaable_type', 'mediaable_id');
    }


    public function profile()
    {
        return $this->belongsTo(Profile::class, 'foreign_key');

    }
}
