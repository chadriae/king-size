<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;

use App\Models\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{

    public function index()
    {
        $info = DB::table('profiles')->where('user_id', Auth::user()->id)->latest('updated_at')->first();

        return view('pages/login/profile', ['info' => $info]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user_id = Auth::user()->id;

        Profile::create([
            'user_id' => $user_id,
            'location' => $request->location,
            'specialties' => $request->specialties,
        ]);
        return back()->with('success', "Info updated successfully.");
    }
}
