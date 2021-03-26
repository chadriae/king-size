<template>
  <div id="nav">
    <div class="navLogo">
      <img src="../../../public/img/chainswhite.png" alt="" />
    </div>
    <div id="navLinks">
      <div class="navLink">
        <router-link class="routerLi" to="/"> Home </router-link>
      </div>
      <div class="navLink">
        <router-link class="routerLi" to="/about">About </router-link>
      </div>
      <div class="navLink">
        <router-link class="routerLi" to="/repairers">Repairers </router-link>
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
  background-image: linear-gradient(
    to top,
    rgba(180, 180, 180, 0),
    rgb(0, 0, 0)
  );
  display: flex;
  flex-direction: row;
  justify-content: center;
  padding: 0 8vw;
  height: 14vh;
  border: 1px solid blue;
  align-items: center;
}
.navLogo {
  height: 8vh;
  width: 8vh;
  border: 1px solid red;
  margin: 1vh 0;
  object-fit: fill;
  padding-right: 0.5vw;
  border-right: 0.3vw solid white;
}
.navLogo img {
  height: 100%;
  width: 100%;
}
#navLinks {
  display: flex;
  flex-direction: row;
  border: 1px solid green;
  margin: 1vh;
  align-content: center;
  width: 80vw;
  justify-content: flex-end;
  height: 12vh;
}

.navLink:hover {
  border-bottom: 0.3vw solid #fff;
  border-radius: 1%;
  font-size: 13pt;
  transition: 0.3s ease;
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
  border: 1px solid yellow;
  border-bottom: 0.5vh solid transparent;
}
.routerLi {
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  border-bottom: 3px solid transparent;
  margin: 2vh 0;
}
/* .routerLi:hover {
  font-size: 13pt;
} */
</style>
