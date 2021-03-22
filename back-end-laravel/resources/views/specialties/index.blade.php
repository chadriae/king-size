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
                    <table class="table-fixed">
                        <tr class="text-left">
                            <th class="w-1/6">Categories</th>
                            <td class="w-4/6">{{  empty($categories) ? "" : $categories->categories  }}</td>
                            <td class="w-1/6 text-right">
                                <form action="{{ route('categories.destroy',$categories->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('specialties.edit', $specialties->id) }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">Edit</button></a>
                                    @csrf
                                    {{-- @method('DELETE')
                                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <th class="w-1/6">Specialties</th>
                            <td class="w-6/6">{{  empty($specialties) ? "" : $specialties->specialties  }}</td>
                            <td class="w-1/6 text-right">
                                <form action="{{ route('specialties.destroy',$specialties->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('specialties.edit', $specialties->id) }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">Edit</button></a>
                                    @csrf
                                    {{-- @method('DELETE')
                                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
