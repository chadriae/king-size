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
#root {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /* position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%); */
  color: #fff;
  border: 1px solid #fff;
}
body {
  margin: 0;
  padding: 0;
  background-image: url("../../../public/img/bike-bg.jpg");
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
