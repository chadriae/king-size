<template>
<Welcome />
<Info />
</template>

<script>
import Welcome from '../components/Welcome.vue'
import Info from '../components/Info.vue'

export default {
  name: 'Home',
  components: {
    Welcome,
    Info
  }
}
</script>

<style>

</style>
