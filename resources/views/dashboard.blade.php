<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Name: {{ Auth::user()->name }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Email: {{ Auth::user()->email }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Location: {{ Auth::user()->location }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Specialties: {{ Auth::user()->specialties }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                 @endif
        
                <div class="p-6 bg-white border-b border-gray-200">
                    Add some more details about yourself:
                </div>

                <form method="POST" action="{{ route('dashboard') }}">
                    @csrf
        
                    <div class="p-6 bg-white border-b border-gray-200">
                        <x-label for="location" :value="__('Location')" />
        
                        <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
                    </div>
        
                    <div class="p-6 bg-white border-b border-gray-200">
                        <x-label for="specialties" :value="__('Specialties')" />
        
                        <x-input id="specialties" class="block mt-1 w-full" type="text" name="specialties" :value="old('specialties')" required />
                    </div>
                    <div class="flex items-center justify-center m-4">
                        <x-button class="ml-4">
                            {{ __('Update info') }}
                        </x-button>
                    </div>
                </form>
        
            </div>
        </div>
    </div>
</x-app-layout>
