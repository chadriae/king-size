<template>
  <div class="welcomeContainer">
    <div class="welcomeTextContainer">
      <h1 class="welcomeText welcomeTitle">Rekt bike?</h1>
      <h4 class="welcomeText welcomeSubTitle">
        Get your bike fixed in the<br />neighbourhood
      </h4>
    </div>
    <button class="moreInfo welcomeText">find out more!</button>
  </div>
</template>

<script>
export default {
  name: "Welcome",
};
</script>

<style scoped>
.welcomeContainer {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: center;
  padding: 0 8vw;
  background-image: url("../../../public/img/bike-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 86vh;
  width: auto;
}
h1,
h4 {
  margin: 0;
}
.welcomeTextContainer {
  background-color: rgba(200, 0, 0, 0.3);
  border-right: 0.5vw solid white;
  margin-top: 0;
  margin-bottom: 0;
  padding-right: 2.5vw;
}

.welcomeText {
  color: white;
  text-align: right;
}
.welcomeTitle {
  font-size: 7vw;
  text-transform: uppercase;
  padding: 0;
  background-color: rgba(0, 0, 0, 0.3);
}
.welcomeSubTitle {
  font-size: 2.5vw;
}
.moreInfo {
  border: 0;
  font-size: 1.2vw;
  font-weight: bold;
  background-color: transparent;
  text-transform: uppercase;
  background-color: rgb(202, 34, 34);
  margin: 4vh 0.5vw 4vh 0;
  padding: 1.7vh 1.5vw;
  border-radius: 2vw 0 2vw 2vw;
}
</style>
