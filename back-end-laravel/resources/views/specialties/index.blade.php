<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Specialties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 bg-white border-b border-gray-200">
                    Edit your specialties here.
                    <p class="float-right">
                        <a href="{{ route('specialties.create') }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Add your specialties</button>
                    </p>
                    <br><br>
                    <span class="flex justify-start font-bold">Specialties:</span> 
                    <table class="table-fixed ">
                        <tr>
                            <td class="w-5/6">{{ $specialties->specialties }}</td>
                            <td class="text-right">
                                <form action="{{ route('specialties.destroy',$specialties->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('specialties.edit', $specialties->id) }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">Edit</button></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
