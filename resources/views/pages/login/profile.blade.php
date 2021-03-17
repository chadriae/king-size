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
                    Location: {{ $info->location }}            
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Specialties: {{ $info->specialties }}
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
                        <x-label for="specialties" :value="__('Specialties')" />
                        <x-input id="specialties" class="block mt-1 w-full" type="text" name="specialties" :value="old('specialties')" required />
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
