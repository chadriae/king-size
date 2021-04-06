<template>
  <div class="map">
      Map page

    <GMapMap
          :center="center"
          :zoom="7"
          map-type-id="terrain"
          style="width: 100%; height: 600px"
      >
        <GMapMarker
            :key="index"
            v-for="(m, index) in markers"
            :position="m.position"
            :clickable="true"
            :draggable="true"
            @click="center=m.position"
        />
    </GMapMap>  
  </div>
</template>

<script>

export default { 
  data(){
    return {
      center: { lat: 51.054745001695125, lng: 3.72176616987 },
      // key: process.env.MIX_GOOGLEKEY,
      markers: []
    }
  },
  methods: {
    async fetchData() {
        try {
            const url = '/api/repairers'
            const response = await axios.get(url)
            let data = response.data

            this.markers = data.map(repairer => ({
                position: { 
                  lat: repairer.address.latitude,
                  lng: repairer.address.longitude
                }
            }))
            console.log(this.markers)
            // return this.markers
        } 
        catch (error) {
          console.log(error)
        }
    },
    showMarkers(){
      console.log(this.markers)
    },
  },
  mounted() {
    this.fetchData()
    this.showMarkers()
  }
}
</script>

<style scoped>
</style>
