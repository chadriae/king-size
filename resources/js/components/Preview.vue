<template>
  <div class="previewContainer">
    <div class="preview preview1">
      <img src="../../../public/img/mapPin.png" alt="" />
      <div class="previewText">
        <h3>Bike Repairs in your Neighbourhood!</h3>
        <p>
          Were you looking for a relaxing ride? Or going to the store. Maybe
          training for your next contest.

          <br />
          But your bike broke down! If only there was someone closeby who had
          the material and experience to fix it in a jim!
        </p>
      </div>
    </div>
  </div>
  <div class="previewEndContainer">
    <div class="preview preview2">
      <div class="previewText">
        <h3>Previewtext number 2</h3>
        <p>get your bike fixed and looking as new</p>
      </div>
      <img src="../../../public/img/bikeTransparent.png" alt="" />
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
}
.preview > img {
  margin: 0 5vw;
  height: 60vh;
  width: auto;
  /* -webkit-transform: scaleX(-1);
  transform: scaleX(-1); */
}
.previewText {
  border: 1px solid green;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.previewText > h3 {
 font-size: 2.2vw;
  font-weight: 700;}
  .previewText > p {
       font-size: 1vw;
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
}
</style>
