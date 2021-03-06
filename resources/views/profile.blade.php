<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My profile') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello, {{ Auth::user()->firstname }}.
                </div>
            </div>
        </div>
    </div>

    @if(!empty($categories))
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="font-bold">Current categories: </span>
                    {{  empty($categories) ? "" : $categories->categories  }}
                    <br><br>
                    <span class="font-bold">Current specialties: </span>
                    {{  empty($specialties) ? "" : $specialties->specialties }}
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Whoops! Looks like you haven't provided your specialties yet. Please go to your <a class="text-red-600" href={{ route('specialties.index' )}}>specialties page</a> and update your information.
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!empty($address))
   <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class=" p-6 bg-white border-b border-gray-200">
                Your address is:
                <ul class="list-inside">
                  <li>Street + number: {{ $address->ship_address }}</li>
                  @if(!empty($address->address2))
                  <li>Apartment, unit, suite, or floor: {{ $address->address2 }}</li>
                  @endif
                  <li>City: {{ $address->locality }}</li>
                  <li>Country: {{ $address->country }}</li>
                </ul>
                </div>  
            </div>
        </div>
    </div>
    @else
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Whoops! Looks like you haven't provided your address yet. Please go to your <a class="text-red-600" href={{ route('address.index' )}}>address page</a> and update your information.
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex items-center justify-center m-4">
                    @if(!empty($profile_pic))
                    <img src="{{ asset('uploads') }}/<?= $profile_pic->image_name ?>" width="100px" height="100px">
                    @else
                    <img src="{{ asset('img/robot.png') }}" width="100px" height="100px">
                    @endif
                </div>
                <div class="flex items-center justify-center m-4">
                    <form action="{{ route('image.upload') }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('image.upload') }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">Edit your profile picture</button></a>
                        @csrf
                    </form>
                </div>
            </div>  
        </div>
    </div>

</x-app-layout>
