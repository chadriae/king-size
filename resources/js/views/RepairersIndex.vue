<template>
<div class="w-full mx-auto">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        <h1>{{ error.title }}</h1>
        {{ error.message }}
    </div>

    <!-- Container body layout -->
    <div class="grid md:grid-rows-6 md:grid-cols-6">
        <!-- Checkboxes sidebar -->
        <aside class="md:row-span-6 md:col-span-1 p-2 border-r-1 bg-gray-100" id="filter">
            <div id="checkboxes">
            <strong>Categories</strong>
                <div class="p-4 md:flex inline-block" v-for="categorie in categories">
                    <input class="mr-2" type="checkbox" v-model="categorie.checked" v-on:change="getfilteredDataByCategories();">
                    <label>{{ categorie.categorie }}</label>
                </div>  
            <br>
            <strong>Specialties</strong>
                <div class="p-4 md:flex inline-block" v-for="specialtie in specialties">
                    <input class="mr-2" type="checkbox" v-model="specialtie.checked" v-on:change="getfilteredDataBySpecialties();">
                    <label>{{ specialtie.specialtie }}</label>
                </div>  
            <br>
            <strong>Places</strong>
                <div class="p-4 md:flex inline-block" v-for="place in places">
                    <input  v-model="place.checked"  class="mr-2" type="checkbox" v-on:change="getfilteredDataByPlaces();">
                    <label>{{ place.place }}</label>
                </div>  
            </div>

        </aside>
        <RepairerCard  :filteredData="filteredData" />
    </div>
</div>
</template>

<script>
// import Filter from '../components/Filter.vue';
import RepairerCard from '../components/RepairerCard.vue';
import specialties from '../data/specialties.js';
import categories from '../data/categories.js';

export default {
    name: 'RepairersIndex',
    components: {
        RepairerCard
    },
    computed: {
        selectedCategories: function() {
            let categories = [];
            let checkedCategories = this.categories.filter(obj => obj.checked);
            checkedCategories.forEach(element => {
                categories.push(element.categorie);
            });
            return categories;
            },
        selectedSpecialties: function() {
            let specialties = [];
            let checkedSpecialties = this.specialties.filter(obj => obj.checked);
            checkedSpecialties.forEach(element => {
                specialties.push(element.specialtie);
            });
            return specialties;
            },
        selectedPlaces: function() {
            let places = [];
            let checkedPlaces = this.places.filter(obj => obj.checked);
            checkedPlaces.forEach(element => {
                places.push(element.place);
            });
            return places;
            },
    },
    data() {
        return {
        loading: false,
        error: null,
        repairers: [],
        filteredData: [],
        places: [],
        categories: categories,
        specialties: specialties,
        };
    },
  methods: {
    async fetchData() {
        try {
            this.error = null;
            this.loading = true;

            const url = '/api/repairers'
            const response = await axios.get(url)
            let data = response.data

            this.repairers = response.data
            this.places = data.map(repairer => ({
                place: repairer.address.locality,
            }))
        } 
        catch (err) {
        if (err.response) {
          // client received an error response (5xx, 4xx)
          this.error = {
            title: "Server Response",
            message: err.message,
          }
        } else if (err.request) {
          // client never received a response, or request never left
          this.error = {
            title: "Unable to Reach Server",
            message: err.message,
          }
        } else {
          // There's probably an error in your code
          this.error = {
            title: "Application Error",
            message: err.message,
          }
        }
      }
      this.loading = false
    },
    getfilteredDataByCategories() {
        this.filteredData = this.repairers;
        let filteredDataByCategories = [];
        // first check if filters where selected
        if (this.selectedCategories.length > 0) {
            filteredDataByCategories = this.filteredData.filter(obj => this.selectedCategories.every(val => obj.specialties['categories'].indexOf(val) >= 0));
            this.filteredData = filteredDataByCategories;
        }
    },
    getfilteredDataBySpecialties() {
        this.filteredData = this.repairers;
        let filteredDataBySpecialties = [];
        // first check if filters where selected
        if (this.selectedSpecialties.length > 0) {
            filteredDataBySpecialties = this.filteredData.filter(obj => this.selectedSpecialties.every(val => obj.specialties['specialties'].indexOf(val) >= 0));
            this.filteredData = filteredDataBySpecialties;
        }
    },
    getfilteredDataByPlaces(){
        console.log(this.places)
        console.log(this.repairers)

        this.filteredData = this.repairers;
        let filteredDataByPlaces = [];
        // first check if filters where selected
        if (this.selectedPlaces.length > 0) {
            filteredDataByPlaces = this.filteredData.filter(obj => this.selectedPlaces.every(val => obj.address['locality'].indexOf(val) >= 0));
            this.filteredData = filteredDataByPlaces;
        }
    }
  },
  mounted() {
    this.fetchData();
    this.getfilteredDataByCategories();
    this.getfilteredDataBySpecialties();
    this.getfilteredDataByPlaces();
  }
}
</script>

<style scoped>
</style>
