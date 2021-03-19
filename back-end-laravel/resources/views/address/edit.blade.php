<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Specialties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="specialties">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <span class="font-bold">Current specialties: </span>
                    {{  !empty($specialties->specialties) ? $specialties->specialties : 'None' }}
                    <form method="POST" action=" {{ route('specialties.store') }}">
                        @csrf

                        <div class="leading-10 p-6 bg-white border-b border-gray-200">
                            <span class="font-bold">Categories</span>
                            <br>
                            <label :value="__('categories')" class="categories">
                                    <input type="checkbox" name="categories[]" value="City bikes">
                                    City bikes
                            </label>
                            <label :value="__('categories')" class="categories">
                                <span class="pr-4">
                                    <input type="checkbox" name="categories[]" value="Mountain bikes">
                                    Mountain bikes
                                </span>
                            </label>
                            <label :value="__('categories')" class="categories">
                                <span class="pr-4">
                                    <input type="checkbox" name="categories[]" value="Race bikes">
                                    Race bikes
                                </span>
                            </label>
                            <label :value="__('categories')" class="categories">
                                <span class="pr-4">
                                    <input type="checkbox" name="categories[]" value="Electric bikes">
                                    Electric bikes
                                </span>
                            </label>
                        </div>

                        <div class="leading-10 p-6 bg-white border-b border-gray-200">
                            <span class="font-bold">Specialties</span>
                            <br>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Flat tires">
                                    Flat tires
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Whole bike repair">
                                    Whole bike repair
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Small bike parts repair">
                                    Small bike parts repair
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Fixing brakes">
                                    Fixing brakes
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Fixing lights">
                                    Fixing lights
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Fixing brakes">
                                    Fixing brakes
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Broken chain">
                                    Broken chain
                                </span>
                            </label>
                            <label :value="__('Specialties')" class="specialties">
                                <span class="pr-4">
                                    <input type="checkbox" name="specialties[]" value="Add new parts to bikes">
                                    Add new parts to bikes
                                </span>
                            </label>
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
                                {{ __('Update specialties') }}
                            </x-button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center m-4">
                        <x-button class="ml-4">
                            <a href={{ route('specialties.index') }}>Back</a>
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
