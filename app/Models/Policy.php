<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'chalet_id',
    ];

    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
