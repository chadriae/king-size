<template>
  <aside class="row-span-6 col-span-1  p-2 border-r-2 h-screen" id="filter">
    <div id="checkboxes">
      Categories:
        <div v-for="(categorie, index) in categories">
          <input type="checkbox" v-on:change="getfilteredData">
            <label>
              {{ categorie.categorie }}
            </label>
        </div>  
    </div>
  </aside>
</template>

<script>

export default {
  name: 'Filter',
  computed: {
    selectedFilters: function() {
      let filters = [];
      let checkedFiters = this.categories.filter(obj => obj.checked);
      checkedFiters.forEach(element => {
        categories.push(element.value);
      });
      console.log('test');
      return filters;
    }
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
    fetchData() {
      this.error = this.users = null;
      this.loading = true;
      axios
          .get('/api/repairers')
          .then(response => {
              this.repairers = response.data;
          })
          .catch(error => {
          console.log(error)
          this.error = true
          })
          .finally(() => this.loading = false)
    },
    getfilteredData: function() {
      this.filteredData = data;
      let filteredDataByfilters = [];

      // first check if filters where selected
      if (this.selectedFilters.length > 0) {
        filteredDataByfilters= this.filteredData.filter(obj => this.selectedFilters.every(val => obj.categorie.indexOf(val) >= 0));
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
