@extends('layouts.layout')
@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 border">
        @for($i = 0; $i <= count((array)$repairers); $i++)
        <ul>
            <h3><strong>{{ $repairers[$i]->name }}</strong></h3>
            <li>{{ $repairers[$i]->email }}</li>
            <li>{{ $info[$i]->location }}</li>
            <li>{{ $info[$i]->specialties }}</li>
        </ul>
        @endfor
    </div>
@endsection