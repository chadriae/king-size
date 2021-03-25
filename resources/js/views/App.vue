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
  margin: 0;
  padding: 0;

}
body {
  margin: 0;
  padding: 0;
}
</style>