<template>
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
</template>

<script>

export default {
  name: 'Filter',
  props: {
      repairers: {
          type: Array,
          required: true,
      },
  },
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
          filteredData: [],
          search: '',
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
          specialties: [
            {
              checked: false,
              specialtie: "Flat tires"
            },
            {
              checked: false,
              specialtie: "Whole bike repair"
            },
            {
              checked: false,
              specialtie: "Small bike parts repair"
            },
            {
              checked: false,
              specialtie: "Fixing brakes"
            },
            {
              checked: false,
              specialtie: "Fixing lights"
            },
            {
              checked: false,
              specialtie: "Broken chain"
            },
            {
              checked: false,
              specialtie: "Add new parts to bikes"
            },
          ]
        };
    },
  methods: {
    getfilteredData: function() {
        this.filteredData = this.repairers;
        console.log(this.repairers);
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
