<?php

namespace App\Http\Controllers;

use App\Models\Repairer;

class RepairerController extends Controller
{
    public function get()
    {
        $repairers = Repairer::with(['specialties', 'address', 'profile_pic'])->get();
        return response()->json($repairers);
    }
}
