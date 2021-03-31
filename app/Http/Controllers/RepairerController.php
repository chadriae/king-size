<?php

namespace App\Http\Controllers;

use App\Models\Repairer;
use App\Models\Specialtie;


class RepairerController extends Controller
{
    public function get()
    {
        // $specialties = Specialtie::all();
        // return $specialties;
        // return explode(',', $specialties['specialties']);

        $repairers = Repairer::with(['specialties', 'address', 'profile_pic'])->get();
        return response()->json($repairers);
    }
}
