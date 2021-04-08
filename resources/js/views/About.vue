<template>
  <div class="about">
    This is the about page.
    <Authors />
  </div>
</template>

<script>
import Authors from "../components/Authors.vue";

export default {
  name: "About",
  components: {
    Authors,
  },
};
</script>

<style scoped>
.about {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
</style>
