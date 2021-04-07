<x-app-layout>
    <script>
    let autocomplete;
    let address1Field;
    let address2Field;
    let postalField;
    let latitudeField;
    let langitudeField;
    
    function initAutocomplete() {
        address1Field = document.querySelector("#ship_address");
        address2Field = document.querySelector("#address2");
        postalField = document.querySelector("#postcode");
        latitudeField = document.querySelector("#latitude");
        longitudeField = document.querySelector("#longitude");
        
        autocomplete = new google.maps.places.Autocomplete(address1Field, {
        componentRestrictions: { country: ["bel"] },
        fields: ["address_components", "geometry"],
        types: ["address"],
        });
        address1Field.focus();
        autocomplete.addListener("place_changed", fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";
        let latitude = "";
        let longitude = "";

        for (const component of place.address_components) {
            const componentType = component.types[0];

            switch (componentType) {
                case "route": {
                address1 = `${component.long_name} ${address1}`;
                break;
                }

                case "street_number": {
                address1 += component.short_name;
                break;
                }

                case "postal_code": {
                postcode = `${component.long_name}${postcode}`;
                break;
                }

                case "postal_code_suffix": {
                postcode = `${postcode}-${component.long_name}`;
                break;
                }

                case "locality":
                document.querySelector("#locality").value = component.long_name;
                break;

                case "country":
                document.querySelector("#country").value = component.long_name;
                break;
            }
        }

        latitude = place.geometry['location'].lat();
        longitude = place.geometry['location'].lng();

        address1Field.value = address1;
        postalField.value = postcode;
        latitudeField.value = latitude;
        longitudeField.value = longitude;

        address2Field.focus();
    }
    </script>  

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Address') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 bg-white border-b border-gray-200">

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

                    <form method="POST" action=" {{ route('address.store') }}" autocomplete="off" id="google-map">
                        @csrf
                        <div class="leading-10">
                            <label class="full-field">
                                <span class="title">Fill in your address here</span><br />
                                <span class="flex items-center justify-end"><em>* = required field</em></span>
                            </label>
                            <label class="full-field">
                                <span class="form-label font-bold">Address: street + number*</span>
                                <input
                                    id="ship_address"
                                    name="ship_address"
                                    required
                                    autocomplete="off"
                                    class="google-map-input"
                                />
                            </label>
                            <label class="full-field">
                                <span class="form-label">Apartment, unit, suite, or floor</span>
                                <input id="address2" name="address2" class="google-map-input" />
                            </label>
                            <label class="full-field">
                                <span class="form-label font-bold">City*</span>
                                <input id="locality" name="locality" class="google-map-input" required />
                            </label>
                            <label class="full-field" for="postal_code">
                                <span class="form-label font-bold">Postal code*</span>
                                <input id="postcode" name="postcode" class="google-map-input" required />
                            </label>
                            <label class="full-field">
                                <span class="form-label font-bold">Country/Region*</span>
                                <input id="country" name="country" class="google-map-input" required />
                            </label>
                            <label class="full-field hidden">
                                <span class="form-label font-bold">Latitude</span>
                                <input id="latitude" name="latitude" class="google-map-input" />
                            </label>
                            <label class="full-field hidden">
                                <span class="form-label font-bold">Longitude</span>
                                <input id="longitude" name="longitude" class="google-map-input" />
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
                                {{ __('Update address') }}
                            </x-button>
                        </div>

                    </form>

                    <div class="flex items-center justify-center m-4">
                        <x-button class="ml-4">
                            <a href={{ route('address.index') }}>Back</a>
                        </x-button>
                    </div>

                    <script
                    src="https://maps.googleapis.com/maps/api/js?key={{ env('MIX_GOOGLEKEY') }}&callback=initAutocomplete&libraries=places&v=weekly"
                    async
                    >
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>