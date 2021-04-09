<template>
  <div class="infoContainer">
    <div class="infoTitle">
      <h3>So you're stranded again.. </h3>
      <p>Theres nothing as cumbersome as wanting to go for a nice ride, a trip to the store (or anything else really) <br>
      and your bike breaking down. Check out why Chained is what you need and why so many love it!</p>
    </div>
    <div class="infoSections">
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>Stuck in the weekend</h4>
        <p>
          ...or on any holiday? Every bike repairer or bike shop is closed? <br>
          No worries, Chained has got an extensive userbase of repairers in every possible technical specialty.
          No need to worry about missing out on that nice weather when your bike breaks down. Theres always a Chained-spokesman (get it) near you.
        </p>
      </div>
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>Any Bike</h4>
        <p>
          You can filter every registered repairer on Chained based on their specialty, your kind of bike, and now even location!
          Wanna take a deep dive in the mud with your mountainbike? No problem. <br>
          Need to take a ride to the store? No biggy! <br>
          
        </p>
      </div>
      <div class="infoSection">
        <img
          src="../../../public/img/gearIcon.png"
          alt="gearIcon"
          class="sectionIcon"
        />
        <h4>Repairers with passion</h4>
        <p>Chained focusses on working with repairers who are in love with bikes and riding. Are you someone who loves riding and tinkering on bikes, but never took it further?
          You can register now and earn some on the side.
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
  /* height: 75vh; */
  width: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  font-family: Montserrat, Helvetica, Arial, sans-serif;
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
@media only screen and (max-width: 930px) {
    .infoTitle h3 {
      font-size: 18px;
    }
  }

  @media only screen and (max-width: 600px) {
    .infoSections {
      flex-direction: column;
      align-items: center;
    }
    .infoSection {
      width: 70vw;
      align-items: center;
    }
  }
</style>
