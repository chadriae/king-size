<template>
<Navbar />
  <div id='root'>
      <router-view />
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
export default {
  name: 'App',
  components: {
    Navbar
  }
}
</script>

<style>
@font-face {
  font-family: "Montserrat";
  src: local("Montserrat"),
  url(../../../public/fonts/Montserrat-Regular.ttf) format("truetype");
}
@font-face {
  font-family: "MontAlternate";
  src: local("MontAlternate"),
  url(../../../public/fonts/MontserratAlternates-Regular.ttf) format("truetype");
}
#root {
  font-family: Montserrat, Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 0;
}
body {
  margin: 0;
  padding: 0;
}
</style>