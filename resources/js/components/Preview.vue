<template>
  <div class="previewContainer">
    <div class="preview preview1">
      <img src="../../../public/img/bikeBrokenTrans.png" alt="" />
      <div class="previewText">
      <h3>Previewtext number 1</h3>
      <p>get your bike fixed and looking as new</p>
    </div>
    </div>
    
  </div>
  <div class="previewEnding">
      
      <div class="preview preview2">
          <div class="previewText">
      <h3>Previewtext number 1</h3>
      <p>get your bike fixed and looking as new</p>
    </div>
          <img src="../../../public/img/bikeTransparent.png" alt="">
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
  background: linear-gradient(170deg, #fff 50%, #ca2222 50%);
  height: 50vh;
}
.previewEnding {
  background: #ca2222;
  /* background: linear-gradient(170deg,  #ca2222 50%, #fff 50%); */
  height: 30vh;
}
.preview > img {
  height: 60vh;
  width: auto;
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
.preview {
    display: flex;
    flex-direction: row;
}
.preview1 {
    justify-content: flex-start;
}
.preview2 {
    justify-content: flex-end;
}
.preview2 > img {
    
}
</style>
