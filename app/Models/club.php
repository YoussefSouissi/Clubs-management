<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'image', 'chef_id'];

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'club_user', 'club_id', 'user_id')->withTimestamps();
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    public function postes()
    {
        return $this->hasMany(post::class);
    }


}