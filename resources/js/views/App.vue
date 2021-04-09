<template>
  <Navbar />
<div id="gearbox">
  <img src="../../../public/img/chainScrollEdge.svg" alt="chainScroller" id="chainScroll">
</div>
  <div id="root">
    <router-view v-slot="{ Component }">
      <transition
        name="fade"
        mode="out-in"
        appear
        enter-active-class="animate__animated animate__fadeIn animate__fast"
        leave-active-class="animate__animated animate__fadeOut animate__fast"
      >
        <component :is="Component" />
      </transition>
    </router-view>
  </div>

  <!-- <div id="root">
    <transition name="view" appear enter-active-class="animate__animated animate__slideInUp" leave-active-class="animate__animated animate__slideOutDown">
      <router-view />
    </transition>
  </div> -->
  <Footer />
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
export default {
  name: "App",
  components: {
    Navbar,
    Footer,
  },
};

let leftgear = document.getElementById("chainScroll");
window.addEventListener("scroll", () => {
  chainScroll.style.transform="rotate("+window.pageYOffset+"deg)";
});

</script>

<style>
@import "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css";
/* @font-face {
  font-family: "Montserrat";
  src: local("Montserrat"),
    url(../fonts/Montserrat-Extrabold.ttf) format("truetype");
  font-weight: bold;
}

@font-face {
  font-family: "Montserrat";
  src: local("Montserrat"),
    url(../fonts/Montserrat-Regular.ttf) format("truetype");
}

@font-face {
  font-family: "MontAlternate";
  src: local("MontAlternate"),
    url(../fonts/MontserratAlternates-Regular.ttf)
      format("truetype");
} */
#root {
  font-family: Montserrat, Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 0;
}
html {
  height: 100%;
}
body {
  margin: 0;
  padding: 14vh 0 0 0;
  min-height: 100%;
}
#nav {
  margin-top: -14vh;
}
#chainScroll {
  position: fixed;
  right: 3vw;
  bottom: 3vh;
  top: auto;
  width: 7vh;
  height: auto;
  transition: 0.1s ease-out;
}
@media only screen and (max-width: 930px) {
  body {
    padding-top: 10vh;
  }
  #nav {
    margin-top: -10vh;
  }
}
@media only screen and (max-width: 600px) {
  #chainScroll {
    transition: 0.2s ease-out;
    margin-left: -4vh;
    width: 8vh;
    height: auto;
    top: 10px;
    left: 50%;
  }
}
</style>