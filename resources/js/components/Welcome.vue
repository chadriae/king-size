<template>
  <div class="hello">
      <p class="text">Welcome to our page</p>
  </div>
</template>

<script>
export default {
  name: 'Welcome'
}
</script>

<style scoped>
.hello{
    background-image: url("../../../public/img/bike-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 800px;
    width: 100%;
}
.text{
    font-size: 60px;
    color: white;
    text-transform: uppercase;
    padding: 100px;
}
</style>
