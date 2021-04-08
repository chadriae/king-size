// Google map package from https://vue-map.netlify.app/

<template>
  <div class="map">
    <div class="p-4">
      Navigation around the map to look for the repairer of your needs. 
    </div>
    <GMapMap
          :center="center"
          :zoom="12"
          map-type-id="terrain"
          style="width: 100%; height: 600px"
      >
        <GMapMarker
            :key="index"
            v-for="(marker, index) in markers"
            :position="marker.position"
            :clickable="true"
        >
          <GMapInfoWindow
            :opened="true"  
          >
            <strong>{{ marker.name }}</strong>
            <p v-if="marker.specialties !== null " id="specialties">
              <strong>Specialties: </strong>
              <ul v-for="specialtie in marker.specialties">
                <li>{{ specialtie }}</li>
              </ul>
            </p>
          </GMapInfoWindow>
        </GMapMarker>
    </GMapMap>  
  </div>
</template>

<script>

export default { 
  data(){
    return {
      center: { lat: 51.054745001695125, lng: 3.72176616987 },
      markers: []
    }
  },
  methods: {
    async fetchData() {
        try {
            const url = '/api/repairers'
            const response = await axios.get(url)
            let data = response.data

            this.markers = response.data
            this.markers = data.filter(empty => empty.specialties !== null).map(repairer => ({
                name: repairer.firstname + " " + repairer.lastname,
                specialties: repairer.specialties.specialties,
                position: { 
                  lat: repairer.address.latitude,
                  lng: repairer.address.longitude
                }
            }))
        } 
        catch (error) {
          console.log(error)
        }
    }
  },
  mounted() {
    this.fetchData()
  }
}
</script>

<style scoped>
</style>
