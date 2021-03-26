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
    protected $table = 'users';
}
