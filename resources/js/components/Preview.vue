<template>
  <div class="previewContainer">
    <div class="preview preview1">
      <img src="../../../public/img/mapPin.png" alt="mapPin" />
      <div class="previewText">
        <h3>Bike Repairs in your Neighbourhood!</h3>
        <p>
          Nothing is as annoying as taking that slow and shin-breaking walk to
          the bike store with your broken bike. <br />
          Thats why... Chained has made it possible to now find repairers in
          your neighbourhood through Google Maps. Check out our Maps tab to find
          the most suited repairer for you and contact them, and get immediaty
          professional service right at your door.
        </p>
      </div>
    </div>
  </div>
  <div class="previewEndContainer">
    <div class="preview preview2">
      <div class="previewText">
        <h3>Ride anywhere, anytime</h3>
        <p>
          Chained offers a continuous and spot-on service for any rider. <br />
          We know the joy of riding to wherever, for any reason. That is why we
          want to help you at any moment, at your doorstep. And get your bike
          looking, but especially: Riding as New!
        </p>
      </div>
      <img src="../../../public/img/bikeTransparent.png" alt="bikePreview" />
    </div>
  </div>
</template>

<script>
export default {
  name: "Preview",
};
</script>

<style scoped>
.previewContainer {
  display: flex;
  /* background: linear-gradient(170deg, #fff 50%, #ca2222 50%); */
  background-image: url("../../../public/img/backgroundslide.png");
  height: 60vh;
  background-size: cover;
}
.previewEndContainer {
  background: linear-gradient(180deg, #ca2222 50%, #fff 50%);
}

.preview {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.preview > img {
  margin: 0 5vw;
  height: 45vh;
  width: auto;
  /* -webkit-transform: scaleX(-1);
  transform: scaleX(-1); */
  transition: 0.3s ease-out;
}
.previewText {
  border: 1px solid green;
  display: flex;
  flex-direction: column;
  justify-content: center;
  max-width: 600px;
}
.previewText > h3 {
  font-size: 4.5vh;
  font-weight: 700;
}
.previewText > p {
  font-size: 2vh;
}

.preview1 {
  justify-content: flex-start;
}
.preview2 {
  justify-content: flex-end;
  text-align: right;
}
.preview2 > img {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
  margin: 0 3vw;
}

@media only screen and (max-width: 930px) {
  .preview img {
    height: 30vh;
    max-width: 50vw;
    width: 100%;
    transition: 0.3s ease;
  }
  .preview1 img{ margin-right: 3vw;
  }
  .preview2 img {
    margin: 0 2vw;
  }
}
@media only screen and (max-width: 600px) {
  .preview {
    flex-direction: column;
  }
  .previewText {
    text-align: center;
    padding: 7vw;
  }
}
</style>
