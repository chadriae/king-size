<template>
<div class="w-full mx-auto">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <!-- Container body layout -->
    <div class="grid grid-rows-6 grid-cols-6">
        <aside class="row-span-6 col-span-1  p-2 border-r-2 h-screen" id="filter">
            <div id="checkboxes">
            Categories:
                <div v-for="(categorie,index) in categories" :key="index">
                    <input type="checkbox" v-model="categorie.checked" v-on:change="getfilteredData">
                        <label>
                        {{ categorie.categorie }}
                        </label>
                </div>  
            <br>
            Specialties:
                <!-- <div v-for="(specialtie, index) in specialties">
                <input type="checkbox" v-model="specialtie.checked" v-on:change="getfilteredData">
                    <label>
                    {{ categorie.categorie }}
                    </label>
                </div>   -->
            </div>
        </aside>
        <!-- <template v-for="repairer in filteredData"> -->
        <div class="m-2 p-2 col-span-5">
            <section v-for="(repairer, index) in filteredData" class="m-2 font-sans leading-normal flex" >
                <!-- card container -->
                <div :key="index" :item="repairer" class="shadow-lg rounded overflow-hidden m-4 sm:flex w-full border" id="card">
                    <div class="h-48 sm:h-auto sm:w-48 md:w-64 flex-none bg-cover bg-center rounded rounded-t sm:rounded sm:rounded-l text-center overflow-hidden" id="image">
                    </div>
                    <!-- card-content -->
                    <div class="px-6 py-4">
                        <h2 class="mb-2 font-black">{{  repairer.firstname }} {{ repairer.lastname }}</h2>
                        <p class="text-gray-500">based in {{ repairer.address.locality }}</p><br>
                        <p class="mb-4">Categories:
                        <span v-for="categorie in repairer.specialties.categories" :categorie="categorie" class="mr-2 p-1 bg-yellow-200 rounded-lg leading-9">#{{ categorie }}</span>
                        </p>
                        <p class="mb-4">Specialties:
                        <span v-for="specialtie in repairer.specialties.specialties" :specialtie="specialtie" class="mr-2 p-1 bg-green-200 rounded-lg leading-9">#{{ specialtie }}</span>
                        </p>
                        <!-- button -->
                        <button class="py-3 px-6 bg-blue-400 hover:bg-blue-200 text-white font-bold rounded-full mt-1 mb-2">
                        Contact me
                        </button>   
                    </div>
                </div>
            </section>
        </div>
            <!-- </template> -->
    </div>
</div>
</template>

<script>
// import Filter from '../components/Filter.vue';
// import RepairerCard from '../components/RepairerCard.vue';
import data from '../data.js';

export default {
    name: 'RepairersIndex',
    computed: {
        selectedFilters: function() {
            let filters = [];
            let checkedFiters = this.categories.filter(obj => obj.checked);
            checkedFiters.forEach(element => {
                filters.push(element.categorie);
            });
            return filters;
            },
    },
    data() {
        return {
        loading: false,
        repairers: null,
        error: null,
        filteredData: [],
        categories: [
            {
                checked: false,
                categorie: "City bikes"
            },
            {
                checked: false,
                categorie: "Mountain bikes"
            },
            {
                checked: false,
                categorie: "Race bikes"
            },
            {
                checked: false,
                categorie: "Electric bikes"
            },
        ],
        // specialties: [
        //     {
        //         checked: false,
        //         specialtie: "Flat tires"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Whole bike repair"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Small bike parts repair"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Fixing brakes"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Fixing lights"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Broken chain"
        //     },
        //     {
        //         checked: false,
        //         specialtie: "Add new parts to bikes"
        //     },
        // ]
        };
    },
  methods: {
    getfilteredData() {
        this.filteredData = data;
        let filteredDataByfilters = [];

        // first check if filters where selected
        if (this.selectedFilters.length > 0) {
            console.log(this.selectedFilters);
			filteredDataByfilters = this.filteredData.filter(obj => this.selectedFilters.every(val => obj.specialties['categories'].indexOf(val) >= 0));
            this.filteredData = filteredDataByfilters;
        }
    }
  },
  mounted() {
    this.getfilteredData();
  }
}
</script>

<style scoped>
</style>
