<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repairer extends Model
{
    use HasFactory;

    /*
     * The table users is the primary table for Repairers
     */
    protected $fillable = [
        'name',
        'specialties'
    ];

    protected $table = 'users';

    protected $primaryKey = 'id';

    public function specialties()
    {
        return $this->hasOne(Specialtie::class, 'user_id')->latest();
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id')->latest();
    }
}
