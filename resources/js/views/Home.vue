<template>
<Welcome />
<Info />
<Preview />
</template>

<script>
import Welcome from '../components/Welcome.vue'
import Info from '../components/Info.vue'
import Preview from '../components/Preview.vue'

export default {
  name: 'Home',
  components: {
    Welcome,
    Info,
    Preview
  }
}
</script>

<style>

</style>
