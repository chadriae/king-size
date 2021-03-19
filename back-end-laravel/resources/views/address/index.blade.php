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
                    <form action="" method="POST" autocomplete="off">
                        <span class="title">Sample address form for North America</span><br />
                        <span><em>* = required field</em></span>
                        <label class="full-field">
                          <!-- Avoid the word "address" in id, name, or label text to avoid browser autofill from conflicting with Place Autocomplete. Star or comment bug https://crbug.com/587466 to request Chromium to honor autocomplete="off" attribute. -->
                          <span class="form-label">Deliver to*</span>
                          <input
                            id="ship-address"
                            name="ship-address"
                            required
                            autocomplete="off"
                          />
                        </label>
                        <label class="full-field">
                          <span class="form-label">Apartment, unit, suite, or floor #</span>
                          <input id="address2" name="address2" />
                        </label>
                        <label class="full-field">
                          <span class="form-label">City*</span>
                          <input id="locality" name="locality" required />
                        </label>
                        <label class="slim-field-left">
                          <span class="form-label">State/Province*</span>
                          <input id="state" name="state" required />
                        </label>
                        <label class="slim-field-right" for="postal_code">
                          <span class="form-label">Postal code*</span>
                          <input id="postcode" name="postcode" required />
                        </label>
                        <label class="full-field">
                          <span class="form-label">Country/Region*</span>
                          <input id="country" name="country" required />
                        </label>
                        <button type="button" class="my-button">Save address</button>
                      </form>                
                </div>
            </div>
        </div>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initAutocomplete&libraries=places&v=weekly"
    async
    ></script>
    

</x-app-layout>
