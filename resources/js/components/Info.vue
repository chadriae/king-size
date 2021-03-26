<template>
  <div class="infoContainer">
    <div class="infoTitle">
      <h3>Topping pie ice cream</h3>
      <p>Cheesecake tootsie roll cake marzipan muffin. </p>
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
  background-color: rgba(100, 0, 50, 0.5);
}
.infoTitle>h3 {
  font-size: 2.2vw;
  font-weight: 700;
}
.infoTitle>p {
  font-size: 1.2vw;
}
.infoSections {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 50, 0.5);
}
.infoSection {
  display: flex;
  flex-direction: column;
  background-color: rgba(0, 150, 0, 0.5);
  align-items: center;
  text-align: center;
}
.infoSection>h4 {
  font-size: 1.6vw;
  font-weight: 600;
}
.infoSection>p {
  font-size: 1.2vw;
}

.sectionIcon {
  height: 9vh;
  width: 9vh;
}
</style>
