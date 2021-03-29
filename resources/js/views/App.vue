<template>
<Navbar />
  <div id='root'>
      <router-view />
  </div>
  <Footer />
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
  name: 'App',
  components: {
    Navbar,
    Footer
  }
}
</script>

<style>
@font-face {
  font-family: "Montserrat";
  src: local("Montserrat"),
  url(../../../public/fonts/Montserrat-Extrabold.ttf) format("truetype");
  font-weight: bold;
}

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
html {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  min-height: 100%;
}
</style>