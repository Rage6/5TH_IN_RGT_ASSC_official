<?php
  header("Content-type: text/css");

  $url_ext = "/public";
  if ($_SERVER['SERVER_NAME'] != "new.bobcat.ws") {
    $url_ext = "";
  };
?>

body {
  font-size: 16px;
  margin: 0;
  border: 0;
  padding: 0;
  /* background:
    repeating-linear-gradient(
      -45deg,
      grey,
      white 100px,
      grey 130px,
      white 180px,
      grey 300px,
      white 410px,
      grey 550px); */
}

a {
  text-decoration: none;
}

.menuBody {
  position: fixed;
  z-index: 2;
}

.mainMenuTopBttn {
  padding: 1vh 3vw 1vh 6vw;
  position: fixed;
  display: flex;
  justify-content: space-between;
  color: white;
  text-align: center;
  font-size: 1.4rem;
  background:
    linear-gradient(
      rgba(0, 100, 0, 0.8),
      rgba(0, 100, 0, 0.8) 85%,
      rgba(0, 0, 0, 0.8));
  width: 91vw;
  max-width: 1920px;
}

.mainMenuTopBttn img {
  height: 8vh;
  cursor: pointer;
}

.mainMenuLink {
  text-decoration: none;
  font-size: 0;
}

.userBox {
  display: flex;
}

.userBox a {
  margin-right: 25px;
  cursor: pointer;
}

.mailBox {
  margin-top: 1vh;
  color: #d3d3d3;
  display: grid;
  grid-template-rows: 50% 50%;
  grid-template-columns: 8vw;
  height: 7vh;
  cursor: pointer;
}

.mailBox div {
  text-align: center;
}

.mailBox div:first-of-type {
  background-image: url('<?php echo($url_ext) ?>/images/inbox.png');
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}

.mailBox div:last-of-type {
  font-size: 1rem;
}

.cartBox {
  margin-top: 1vh;
  display: grid;
  grid-template-rows: 50% 50%;
  grid-template-columns: 8vw;
  height: 7vh;
  cursor: pointer;
}

.cartBox div {
  text-align: center;
}

.cartBox div:first-of-type {
  background-image: url('<?php echo($url_ext) ?>/images/shopping-cart.png');
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}

.cartBox div:last-of-type {
  font-size: 1rem;
  color: #d3d3d3;
}

.mainMenuBttn {
  padding: 8px 5%;
  color: white;
  font-size: 1.2rem;
  font-family: 'Prompt', sans-serif;
  background:
    linear-gradient(
      rgba(139,0,0,1),
      rgba(139,0,0,1) 85%,
      rgba(0,0,0,1));
  cursor: pointer;
}

.mainMenuTopSquare {
  padding: 1.5vh 1vh 0 1vh;
  width: 7vh;
  height: 6.5vh;
}

.mainMenuTopSquare div {
  margin-bottom: 1vh;
  border-radius: 10px;
  background-color: #d3d3d3;
  height: 1vh;
}

.mainMenuBox {
  display: none;
  position: fixed;
  width: 100%;
  left: 100vw;
  animation-name: none;
  animation-duration: 1s;
  animation-fill-mode: forwards;
}

.mainMenuSubBttn {
  padding: 8px 5% 8px 10%;
  color: white;
  font-size: 1.1rem;
  font-family: 'Prompt', sans-serif;
  background-color: grey;
  cursor: pointer;
}

.mainMenuSubBttn:hover {
  background-color: black;
}

.mainMenuSubBox {
  border-bottom: 1px solid black;
  display: none;
}

@keyframes scrollMenuAllShow {
  0% {
    /* left: 100vw; */
    left: -100vw;
  }
  100% {
    left: 0vw;
  }
}

@keyframes scrollMenuHalfShow {
  0% {
    /* left: 100vw; */
    left: -50vw;
  }
  100% {
    /* left: 50vw; */
    left: 0vw;
  }
}

@keyframes scrollMenuThirdShow {
  0% {
    /* left: 100vw; */
    left: -30vw;
  }
  100% {
    /* left: 70vw; */
    left: 0vw;
  }
}

@keyframes scrollMenuAllHide {
  0% {
    left: 0vw;
  }
  100% {
    /* left: 100vw; */
    left: -100vw;
  }
}

@keyframes scrollMenuHalfHide {
  0% {
    /* left: 50vw; */
    left: 0vw;
  }
  100% {
    /* left: 100vw; */
    left: -50vw;
  }
}

@keyframes scrollMenuThirdHide {
  0% {
    /* left: 70vw; */
    left: 0vw;
  }
  100% {
    /* left: 100vw; */
    left: -30vw;
  }
}
