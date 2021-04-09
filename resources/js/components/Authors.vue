<template>
  <div class="hello">
    <div class="authorContainer">
      <div class="authorCard">
        <div class="image">
          <img
            class="w-48 h-48 rounded-full md:mr-4 ml-4"
            src="/img/profile-chadriae.png"
          />
        </div>
        <div class="bioContainer">
          <div class="bio">
            <h3>Christophe Adriaensens</h3>
            <p>test bio</p>
          </div>
          <div class="socials">
            <a href="https://github.com/chadriae" target="_blank" alt="Chadriae Github">
              <div class="github">
                <img src="/img/githubIcon.png" alt="githubIcon" />
                <p>Github Profile</p>
              </div></a
            >
            <a href="https://www.linkedin.com/in/christophe-adriaensens/" target="_blank" alt="Christophe Adriaensens">
              <div class="linkedin">
                <img src="/img/linkedinIcon.png" alt="linkedinIcon" />
                <p>Linkedin Profile</p>
              </div>
            </a>
            <button class="contact">
              <a href="mailto:manten.d@hotmail.com"> Contact me</a>
            </button>
          </div>
        </div>
      </div>
      <div class="authorCard">
        <div class="image">
          <img
            class="w-48 h-48 rounded-full md:mr-4 ml-4"
            src="/img/profile-vicible2.png"
          />
        </div>
        <div class="bioContainer">
          <div class="bio">
            <h3>Manten Devillé</h3>
            <p>test bio</p>
          </div>
          <div class="socials">
            <a href="https://github.com/Vicible2" target="_blank" alt="Vicible2 Github">
              <div class="github">
                <img src="/img/githubIcon.png" alt="githubIcon" />
                <p>Github Profile</p>
              </div>
            </a>
            <a href="https://www.linkedin.com/in/devillemanten/" target="_blank" alt="Manten Devillé">
              <div class="linkedin">
                <img src="/img/linkedinIcon.png" alt="linkedinIcon" />
                <p>Linkedin Profile</p>
              </div>
            </a>
            <button class="contact">
              <a href="mailto:manten.d@hotmail.com"> Contact me</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Authors",
};
</script>

<style scoped>
.authorContainer {
  border: 1px solid red;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  margin: 1rem;
  padding: 0.5rem;
}

.authorCard {
  background-color: #e5e7eb;
  display: flex;
  flex-direction: row;
  margin: 1rem;
  padding: 1rem;
  color: #17161b;
  border-radius: 1vw 0 1vw 1vw;
}
.image {
  display: flex;
  justify-content: center;
  width: auto;
}
.image img {
  height: 25vh;
  width: 25vh;
}
.bioContainer {
  border: 1px solid white;
  margin-left: 1rem;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.bioContainer h3 {
  font-size: 14pt;
  font-weight: 700;
}
.bio p {
  color: #3c3b41;
}
.socials {
  /* background-color: blue; */
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  width: 100%;
}
.socials div {
  display: flex;
  flex-direction: row;
  margin: 2rem;
  align-items: center;
  transition: 0.2s ease-out;
}
.socials img {
  width: 100%;
  height: auto;
  max-width: 2vw;
  margin: 0 0.5rem;
}
/* .github {
  display: flex;
  flex-direction:row;
} */
/* .github img {
  height: 2vw;
  width: 2vw;
} */
.contact {
  color: #fff;
  border: 0;
  font-size: 2.5vh;
  font-weight: bold;
  text-transform: uppercase;
  background-color: #c92222;
  margin: auto 0.5vw auto 4vh;
  padding: 1.5vh 1.5vw;
  border-radius: 2vw 0 2vw 2vw;
  transition: 0.3s ease-out;
}
.contact:hover {
  font-size: 3vh;
  transition: 0.3s ease;
}
.socials div:hover {
  color: #fff;
font-weight: 900;  transition: 0.2s ease;
}

@media only screen and (max-width: 930px) {
  .bioContainer {
    margin-left: 0;
  }
  .socials img {
    height: 3vh;
    width: 3vh;
  }
  .socials div {
    margin: 1rem;
  }
  .image {
    display: flex;
    justify-content: center;
  }
  .bioContainer {
    justify-content: center;
    text-align: center;
  }
  .authorCard {
    flex-direction: column;
  }
  .socials {
    justify-content: center;
    width: 100%;
  }
  .socials p {
    font-size: 10px;
  }
  .contact {
    font-size: 2vh;
    margin: auto 1rem;
  }
}
@media only screen and (max-width: 600px) {
  .socials {
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .socials div {
    margin: 0.5rem;
  }
  .socials img {
    margin-right: 0.4rem;
  }
  .contact {
    margin: auto;
    font-size: 2vh;
  }
  #nav {
    height: 14vh;
  }
}
</style>
