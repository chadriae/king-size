<template>
<HomeTitle />
<HelloWorld />
</template>

<script>
import HomeTitle from '../components/HomeTitle.vue'
import HelloWorld from '../components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld,
    HomeTitle
  }
}
</script>

<style>

</style>
