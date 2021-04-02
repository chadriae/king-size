<template>
  <div class="map">
      Map page

      <GoogleMap
        :api-key=key
        style="width: 100%; height: 600px"
        :center="center"
        :zoom="15"
        :markers="markers"
      >
    <Marker :options="{ position: center }" />
  </GoogleMap>
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'

export default defineComponent({
  components: { GoogleMap, Marker },
  setup() {
    const center = { lat: 51.054745001695125, lng: 3.72176616987 }
    return { center }
  },
  
  data(){
    return {
      key: process.env.MIX_GOOGLEKEY,
      markers: []
    }
  },
  methods: {
    async fetchData() {
        try {
            const url = '/api/repairers'
            const response = await axios.get(url)
            let data = response.data

            console.log(response.data)

            this.markers = data.map(repairer => ({
                lat: repairer.address.latitude,
                lng: repairer.address.longitude
            }))
            console.log(this.markers)
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
  },
  
  
})
</script>

<style scoped>
</style>
