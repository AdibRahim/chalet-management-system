<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
