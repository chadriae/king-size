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
                <div v-for="(specialtie, index) in specialties">
                <input type="checkbox" v-model="specialtie.checked" v-on:change="getfilteredData">
                    <label>
                    {{ specialtie.specialtie }}
                    </label>
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
        selectedFilters: function() {
            let filters = [];

            // categorie filters
            let checkedCategories = this.categories.filter(obj => obj.checked);
            checkedCategories.forEach(element => {
                filters.push(element.categorie);
            });

            // specialtie filters
            let checkedSpecialties = this.specialties.filter(obj => obj.checked);
            checkedSpecialties.forEach(element => {
                filters.push(element.specialtie);
            });

            console.log(filters);
            return filters;
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
    fetchData() {
        this.error = null;
        this.loading = true;

        axios
            .get('/api/repairers')
            .then(response => {
                this.repairers = response.data;
            })
            .catch(error => {
                console.log(error);
            this.error = true
            })
            .finally(() => this.loading = false)
    },

    getfilteredData() {
        this.filteredData = this.repairers;
        console.log(this.filteredData);
        let filteredDataByfilters = [];

        // first check if filters where selected
        if (this.selectedFilters.length > 0) {
			filteredDataByfilters = this.filteredData.filter(obj => this.selectedFilters.every(val => obj.specialties['categories'].indexOf(val) >= 0));
            filteredDataByfilters = this.filteredData.filter(obj => this.selectedFilters.every(val => obj.specialties['specialties'].indexOf(val) >= 0));
            this.filteredData = filteredDataByfilters;
        }
    }
  },
  mounted() {
    this.fetchData();
    this.getfilteredData();
  }
}
</script>

<style scoped>
</style>
