<template>
  <div class="infoContainer">
    <div class="infoTitle">
      <h3>Icing gingerbread dessert candy cupcake apple pie</h3>
      <p>Lemon drops dragée brownie marzipan sugar plum lollipop marshmallow. Icing bonbon brownie <br> liquorice dragée cheesecake donut brownie liquorice </p>
    </div>
    <div class="infoSections">
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>Info1title</h4>
        <p>
          Tiramisu wafer marshmallow soufflé pastry lollipop halvah cupcake oat
          cake. Marshmallow halvah icing. Biscuit gummi bears gummies candy
          sesame snaps. Cake powder bear claw cupcake jujubes chupa chups.
        </p>
      </div>
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>info2title</h4>
        <p>
          Soufflé croissant sweet icing donut cheesecake. Chocolate cake tootsie
          roll soufflé macaroon carrot cake biscuit danish donut. Chocolate cake
          croissant jujubes marshmallow dragée. Donut tiramisu candy tart cake
          chocolate cake muffin dragée.
        </p>
      </div>
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>info3title</h4>
        <p>
          Icing toffee lollipop wafer pie. Chocolate cake powder biscuit. Oat
          cake lollipop marzipan dessert chupa chups cookie cotton candy
          chocolate bar croissant.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Info",
};
</script>

<style scoped>
.infoContainer {
  height: 75vh;
  width: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  font-family: Avenir, Helvetica, Arial, sans-serif;
}
.infoTitle {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2vh 0;
  /* background-color: rgba(100, 0, 50, 0.5); */
}
.infoTitle>h3 {
  font-size: 4.5vh;
  font-weight: 700;
}
.infoTitle>p {
  font-size: 2vh;
  text-align: center;
}
.infoSections {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  margin-top: 2vh;
  /* background-color: rgba(0, 0, 50, 0.5); */
}
.infoSection {
  display: flex;
  flex-direction: column;
  /* background-color: rgba(0, 150, 0, 0.5); */
  align-items: center;
  text-align: center;
  width: 27vw;
    margin: 2vh 3vw;


}
.infoSection>h4 {
  font-size: 3.5vh;
  font-weight: 600;
  margin: 1vh;
}
.infoSection>p {
  font-size: 2vh;
}

.sectionIcon {
  height: 7vh;
  width: 7vh;
margin: 2vh 0 1vh;}
</style>
