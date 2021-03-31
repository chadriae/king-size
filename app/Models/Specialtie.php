<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;


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

    protected $casts = [
        'categories' => 'array',
        'specialties' => 'array'
    ];


    // link for relation to repairer
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Writing to DB
    // public function setSpecialtyAttribute($value)
    // {
    //     $this->attributes['specialties'] = json_encode($value);
    // }

    // public function getCategoryAttribute($value)
    // {
    //     return $this->attributes['specialties'] = json_decode($value);
    // }

}
