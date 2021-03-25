<template>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block" id='nav'>
      <router-link to='/'> Home </router-link>
      <router-link to='/about'>About </router-link>
      <router-link :to="{ name: 'repairers.index' }">Repairers</router-link>
    </div>
</template>

<script>
export default {
  name: 'Navbar'
}
</script>

<style scoped>
  </style>
