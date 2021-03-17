<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Name: {{ Auth::user()->name }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Email: {{ Auth::user()->email }}
                   </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Location: {{ !empty($info->location) ? $info->location : "Please give us your location." }}            
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Specialties: {{ !empty($info->specialties) ? $info->specialties : "Provide some of your specialties." }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    Add some more details about yourself:
                </div>

                <form method="POST" action=" {{ route('profile.update') }}">
                    @method('PUT')
                    @csrf
                     <div class="p-6 bg-white border-b border-gray-200">
                        <x-label for="location" :value="__('Location')" />
                        <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
                    </div>
        
                    <div class="p-6 bg-white border-b border-gray-200">

                        <label for="specialties" :value="__('Specialties')">
                            <input type="checkbox" name="specialties[]" value="Laravel">
                            <span>Laravel</span>
                            <input type="checkbox" name="specialties[]" value="React">
                            <span>React</span>
                            <input type="checkbox" name="specialties[]" value="MySQL">
                            <span>MySQL</span>
                            <input type="checkbox" name="specialties[]" value="Kakken">
                            <span>Kakken</span>
                        </label>

                        {{-- <x-label for="specialties" :value="__('Specialties')" />
                        <x-input id="specialties" class="block mt-1 w-full" type="text" name="specialties" :value="old('specialties')" required autofocus />
 --}}
                    </div>

                        @if(Session::has('success'))
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                        @endif
        

                    <div class="flex items-center justify-center m-4">
                        <x-button class="ml-4">
                            {{ __('Update info') }}
                        </x-button>
                    </div>
                </form>
        
            </div>
        </div>
</x-app-layout>
