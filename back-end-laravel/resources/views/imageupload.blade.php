<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload profile picture') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class=" p-6 bg-white border-b border-gray-200">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Upload your profile picture here</h2>
                    </div>
                <div class="panel-body">

                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{Session::get('success')}}
                    </div>

                    @elseif(Session::has('failed'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get('failed')}}
                        </div>
                    @endif

                    <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" name="image" class="form-control">
                                {!!$errors->first('image', '<span class="text-danger">:message</span>')!!}
                            </div>
            
                            <div class="flex items-center justify-center m-4">
                                <x-button class="ml-4">
                                    {{ __('Upload picture') }}
                                </x-button>
                            </div>
                            <div class="flex items-center justify-center m-4">
                                <x-button class="ml-4">
                                    <a href={{ route('profile') }}>Back</a>
                                </x-button>
                            </div>
        
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>

</x-app-layout>
