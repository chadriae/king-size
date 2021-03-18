<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Specialties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                    Check all the specialties you have.
                    <form method="POST" action=" {{ route('specialties.store') }}">
                        @csrf
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
