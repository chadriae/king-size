<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Repairer;


class DashboardController extends Controller
{
    public function index()
    {
        $repairers = Repairer::all();

        return view('pages/login/dashboard', compact('repairers'));
    }
}
