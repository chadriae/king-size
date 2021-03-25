<?php

namespace App\Http\Controllers;

use App\Models\Specialtie;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SpecialtieController extends Controller
{
    public function index()
    {
        $categories = DB::table('specialties')->where('userId', Auth::user()->id)->latest('updated_at')->first();
        $specialties = DB::table('specialties')->where('userId', Auth::user()->id)->first();

        return view('specialties.index', ['specialties' => $specialties, 'categories' => $categories]);
    }

    public function create()
    {
        return view('specialties.create');
    }

    public function store(Request $request)
    {
        $data = $request->input();
        $data['userId'] = Auth::id();
        $data['categories'] = implode(", ", $data['categories']);
        $data['specialties'] = implode(", ", $data['specialties']);

        Specialtie::create($data);

        return back()->with('success', "Info updated successfully.");
    }

    public function show(Specialtie $specialtie)
    {
        return view('specialties.show', compact('specialtie'));
    }

    public function edit(Specialtie $specialtie)
    {
        $specialties = DB::table('specialties')->where('userId', Auth::user()->id)->latest('updated_at')->first();

        return view('specialties.edit', compact('specialtie', 'specialties'));
    }

    public function update(Request $request, Specialtie $specialtie)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $specialtie->update($request->all());

        return redirect()->route('specialties.index')
            ->with('success', 'Specialties updated successfully');
    }

    public function destroy(Specialtie $specialtie)
    {
        $specialtie->delete();

        return redirect()->route('specialties.index')
            ->with('success', 'Specialty deleted successfully');
    }

    public function returnSpecialties()
    {
        $specialties = DB::table('specialties')->get();
        return response()->json($specialties);
    }
}
