<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialtie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'categories',
        'specialties'
    ];

    // Relationships, model specialtie belongs to repairer/user
    protected $table = 'specialties';
    protected $primaryKey = 'id';

    public function repairer()
    {
        return $this->belongsTo(Repairer::class);
    }


    // 
    public function setSpecialtyAttribute($value)
    {
        $this->attributes['specialties'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['specialties'] = json_decode($value);
    }
}
