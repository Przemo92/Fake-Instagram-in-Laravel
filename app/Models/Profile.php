<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/DOrcOY3XWH0Pk04drzJdBX6v9qT7eg3O83LCeWbE.jpg';
        return '/storage/'. $imagePath;
    }
}
