<template>
  <div class="footerContainer">
    <div class="brandName"><h1>chained</h1></div>

    <div class="socials">
      <img src="../../../public/img/facebookIcon.png" alt="" />
      <!-- <p class="bullet">○</p> -->
      <img src="../../../public/img/instagramIcon.png" alt="" />
      <!-- <p class="bullet">○</p> -->
      <img src="../../../public/img/twitterIcon.png" alt="" />
    </div>
    <div class="tou">
      <ul>
        <li>Terms of Use</li>
        <li>•</li>
        <li>Info</li>
        <li>•</li>
        <li>Privacy Policy</li>
      </ul>
    </div>
    <div class="footerInformation">
      <p>
        Copyright © 2021 Chained <br />
        Manten Devillé &amp; Christophe Adriaensens for Becode
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
* {
  font-family: Montserrat, Helvetica, Arial, sans-serif;
}
.footerContainer {
  /* height: 30vh; */
  background-color: #17161b;
  color: #fff;
  display: flex;
  flex-direction: column;
  /* padding: 4vh; */
  justify-content: center;
  padding: 5vh 0;
}
.socials {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.socials img {
  height: 3vh;
  width: auto;
  margin: 1vh 1vw;
}
.tou {
  display: flex;
  justify-content: center;
  font-size: 1.7vh;
}
.tou ul {
  display: flex;
  flex-direction: row;
}
.tou li {
  margin: 0 0.5vw;
}
.brandName {
  text-align: center;
  /* background-color: rgba(255, 255, 255, 0.3); */
}
.brandName h1 {
  font-size: 7vh;
  font-weight: bold;
  margin-bottom: 2vh;
}
.footerInformation {
  margin-top: 2vh;
  text-align: center;
  /* background-color: rgba(255, 0, 0, 0.8); */
  font-size: 1.5vh;
}
</style>
