<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Repairer;

class RepairerController extends Controller
{
    public function get()
    {
        $repairers = DB::table('users')->get();
        return response()->json($repairers);
    }
}
