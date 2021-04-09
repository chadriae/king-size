<template>
  <div id="nav">
    <div class="brand">
      <div @click="toggleName" class="brandLogo smallNavHide">
        <router-link class="routerLi" to="/">
          <img src="../../../public/img/chainswhite.png" alt="chainsLogo" />
        </router-link>
      </div>

      <h1 class="brandName animate__animated animate__flipInX">
        <router-link to="/">chained</router-link>
      </h1>
    </div>
    <div id="navLinks" class="smallNavHideLinks">
      <div class="navLink">
        <router-link class="routerLi smallNavHideLinks" to="/"> Home </router-link>
      </div>
      <div class="navLink">
        <router-link class="routerLi smallNavHideLinks" to="/about">About </router-link>
      </div>
      <div class="navLink">
        <router-link class="routerLi smallNavHideLinks" to="/repairers">Repairers </router-link>
      </div>
      <div class="navLink">
        <router-link class="routerLi smallNavHideLinks" to="/map">Map </router-link>
      </div>
      <div class="navLink">
        <span class="routerLi smallNavHideLinks"><a href="/dashboard">Dashboard </a></span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  
  name: "Navbar",
};
</script>



<style scoped>
#nav {
  /* background-image: linear-gradient(
    to top,
    rgba(180, 180, 180, 0),
    rgb(0, 0, 0)
  ); */
  background-color: #17161b;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 0 6vw;
  height: 14vh;
  /* border: 1px solid blue; */
  align-items: center;
  position: fixed;
  transition: 0.4s;
  width: 100vw;
}
.brand {
  display: flex;
  flex-direction: row;
  align-items: center;
  height: 14vh;
}
.brandLogo {
  height: 8vh;
  width: 10vh;
  /* border: 1px solid red; */
  margin: 0 2vw 0 0;
  padding-right: 0.5vw;
  padding-left: 0.5vw;
  /* border-right: 0.5vw solid white; */
  transition: 0.6s ease;
  object-fit: fill;
}

.brandLogo img {
  height: 8vh;
  width: 8vh;
  transition: 0.2s ease-out;
}

.brandName {
  font-family: Montserrat, Helvetica, Arial, sans-serif;
  color: #fff;
  font-weight: bold;
  font-size: 9vh;
  text-decoration: none;
  background: linear-gradient(to right, #ccc 50%, #fff 50%, #fff);
  background-size: 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: 0.5s ease-out;
}
.brandName:hover {
  background-position: -100%;
}
#navLinks {
  display: flex;
  flex-direction: row;
  /* border: 1px solid green; */
  margin: 1vh;
  align-content: center;
  /* width: 100vw; */
  justify-content: flex-end;
  height: 12vh;
}

.navLink:hover {
  /* border-bottom: 0.3vw solid #fff; */
  border-radius: 1%;
  font-size: 14pt;
  transition: 0.3s ease;
  color: #fff;
}
.navLink .routerLi:active {
  font-size: 14pt;
}
.navLink {
  display: flex;
  align-items: center;
  margin: 2vh 2vw;
  width: 6vw;
  justify-content: center;
  text-align: center;
  padding: 0px 2vw;
  list-style-type: none;
  /* border: 1px solid yellow; */
  /* border-bottom: 0.5vh solid transparent; */
  transition: 0.4s ease;
}
.routerLi {
  color: #ccc;
  text-decoration: none;
  text-transform: uppercase;
  border-bottom: 3px solid transparent;
  margin: 2vh 0;
}

.white {
  color: red;
}
/* .routerLi:hover {
  font-size: 13pt;
} */

@media only screen and (max-width: 930px) {
  #nav {
    height: 10vh;
  }
  .navLink {
    font-size: 12px;
    font-weight: 600;
  }
  .brandName {
    font-size: 6vh;
  }
  .brandLogo img {
    height: 6vh;
    width: 6vh;
  }
  .brand .smallNavHide {
    display:none;
  }
  @media only screen and (max-width: 600px) {
    /* .smallNavHideLinks {
      display: none;
    } */
  }
}
</style>
