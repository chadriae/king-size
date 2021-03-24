<template>
  <div id='root'>
    <Navbar />
    <router-view />
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
export default {
  name: 'App',
  components: {
    Navbar
  }
}
</script>

<style>
body {
  margin: 0;
  padding: 0;
  background-image: url("./assets/bike-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
#app {

  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  justify-content: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
</style>
