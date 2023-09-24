<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'image',
        'description'
    ];

    use HasFactory;
    public function club()
    {
        return $this->belongsTo(club::class);
    }
}