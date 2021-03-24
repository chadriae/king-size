<template>
    <div id='nav'>
      <router-link to='/'> Home </router-link>
      <router-link to='/about'>About </router-link>
      <router-link to='/profiles'>Profiles </router-link>
    </div>
</template>

<script>
export default {
  name: 'Navbar'
}
</script>

<style scoped>
#nav {
    background-color: black;
}
</style>
