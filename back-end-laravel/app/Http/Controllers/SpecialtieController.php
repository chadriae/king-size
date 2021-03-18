<?php

namespace App\Http\Controllers;

use App\Models\Specialtie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SpecialtieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties = DB::table('specialties')->where('userId', Auth::user()->id)->latest('updated_at')->first();

        return view('specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $data['userId'] = Auth::id();
        $data['specialties'] = implode(", ", $data['specialties']);
        Specialtie::create($data);

        return back()->with('success', "Info updated successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function show(Specialtie $specialtie)
    {
        return view('specialties.show', compact('specialtie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialtie $specialtie)
    {
        $specialties = DB::table('specialties')->where('userId', Auth::user()->id)->latest('updated_at')->first();

        return view('specialties.edit', compact('specialtie', 'specialties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialtie $specialtie)
    {
        $specialtie->delete();

        return redirect()->route('specialties.index')
            ->with('success', 'Specialty deleted successfully');
    }
}
