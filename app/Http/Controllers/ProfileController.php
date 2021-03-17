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

        return view('pages/login/profile', compact('info'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $data = $request->input();
        $data['user_id'] = Auth::id();
        $data['specialties'] = implode(", ", $data['specialties']);
        Profile::create($data);

        // Profile::create([
        //     'user_id' => $user_id,
        //     'location' => $request->location,
        //     'specialties' => $request->input('category')
        // ]);

        return back()->with('success', "Info updated successfully.");
    }
}
