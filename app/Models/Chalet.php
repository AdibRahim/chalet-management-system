<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chalet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description','address','poscode','phone','email','latitude','longitude','user_id','district_id'];

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function accommodations(){
        return $this->belongsToMany(Accommodation::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function policies(){
        return $this->hasMany(Policy::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
