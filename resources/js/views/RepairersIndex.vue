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
    <div class="grid grid-rows-6 grid-cols-6">
        <aside class="row-span-6 col-span-1  p-2 border-r-2 h-screen" id="filter">
            <div id="checkboxes">
            <strong>Categories:</strong>
                <div class="p-4" v-for="(categorie,index) in categories" :key="index">
                    <input class="mr-2" type="checkbox" v-model="categorie.checked" v-on:change="getfilteredDataByCategories();">
                    <label>{{ categorie.categorie }}</label>
                </div>  
            <br>
            <strong>Specialties:</strong>
                <div class="p-4" v-for="(specialtie, index) in specialties">
                    <input class="mr-2" type="checkbox" v-model="specialtie.checked" v-on:change="getfilteredDataBySpecialties();">
                    <label>{{ specialtie.specialtie }}</label>
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

    },
    data() {
        return {
        loading: false,
        error: null,
        repairers: [],
        filteredData: [],
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
            this.repairers = response.data
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
  },
  mounted() {
    this.fetchData();
    this.getfilteredDataByCategories();
    this.getfilteredDataBySpecialties();
  }
}
</script>

<style scoped>
</style>
