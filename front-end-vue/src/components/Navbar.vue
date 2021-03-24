<template>
  <div id="nav">
    <div class="navLogo"><img src="../assets/chainswhite.png" alt="" /></div>
    <div id="navLinks">
      <ul>
        <li>
          <router-link class="routerLi" to="/"> Home </router-link>
        </li>
        <li>
          <router-link class="routerLi" to="/about">About </router-link>
        </li>
        <li>
          <router-link class="routerLi" to="/profiles">Profiles </router-link>
        </li>
      </ul>
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
  background-image: linear-gradient(to top, rgba(255, 0, 0, 0), rgb(0, 0, 0));
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  padding: 0 8vw;
  height: 10vh;
  border: 1px solid blue;
  align-content: center;
}
.navLogo {
  height: 8;
  width: 8vh;
  border: 1px solid red;
  margin: 1vh 0;
  object-fit: fill;
  padding-right: 0.5vw;
  border-right: 0.5vw solid white;
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
}
ul {
  display: flex;
  justify-content: center;
  padding: 0;
}
li {
  display: block;
  padding: 0 2vw;
  list-style-type: none;
  width: 6vw;
}
.navLink {
  margin: 6vh 2vw;
  border: 1px solid red;
  width: 6vw;
}
.routerLi {
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  border-bottom: 3px solid transparent;
}
.routerLi:hover {
  font-size: 13pt;
color: #a6bb98;}
</style>
