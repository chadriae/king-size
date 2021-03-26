<template>
  <div class="welcomeContainer">
    <div class="welcomeTextContainer">
      <h1 class="welcomeText welcomeTitle">
        Re<span id="titleSpace">kt</span> bike?
      </h1>
      <h4 class="welcomeText welcomeSubTitle">
        Get your bike fixed in the<br />neighbourhood
      </h4>
    </div>
    <button class="moreInfo welcomeText"><p>find out more!</p></button>
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
  /* background-color: rgba(200, 0, 0, 0.3); */
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
  letter-spacing: 2px;
  font-size: 12vh;
  font-weight: 800;
  text-transform: uppercase;
  padding: 0;
  /* background-color: rgba(0, 0, 0, 0.3); */
}
#titleSpace {
  letter-spacing: 8px;
}
.welcomeSubTitle {
  font-size: 5vh;
}
.moreInfo {
  border: 0;
  font-size: 2.5vh;
  font-weight: bold;
  background-color: transparent;
  text-transform: uppercase;
  background-color: #c92222;
  margin: 4vh 0.5vw 4vh 0;
  padding: 1.7vh 1.5vw;
  border-radius: 2vw 0 2vw 2vw;
  transition: 0.3s ease-out ;
}
.moreInfo:hover {
  font-size: 3vh;
  transition: 0.3s ease;
}
</style>
