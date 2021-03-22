<?php
var_dump($address);
?>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Address') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class=" p-6 bg-white border-b border-gray-200">
              This is the address part. To add details, click <span><a href="{{ route('address.create') }}">here</span>.
            </div>  
          </div>
      </div>
    </div>

    

</x-app-layout>
