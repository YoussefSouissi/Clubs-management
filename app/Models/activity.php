<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'activity_type',
        'date',
        'description',
        'image',
        'form_link',
    ];
    public function club()
    {
        return $this->belongsTo(club::class);
    }

}