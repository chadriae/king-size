<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location',
        'specialties',
    ];

    public function setSpecialtyAttribute($value)
    {
        $this->attributes['specialties'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['specialties'] = json_decode($value);
    }
}
