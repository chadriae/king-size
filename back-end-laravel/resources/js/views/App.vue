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
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color: #2c3e50;
  border: 1px solid black;
}
</style>
