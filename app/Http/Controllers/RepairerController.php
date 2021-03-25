<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Repairer;
use App\Models\Specialtie;

class RepairerController extends Controller
{
    public function get()
    {
        $repairers = DB::table('users')
            ->join('specialties', 'users.id', '=', 'specialties.userId')
            ->join('addresses', 'users.id', '=', 'addresses.userId')
            ->get();

        return response()->json($repairers);
    }
}
