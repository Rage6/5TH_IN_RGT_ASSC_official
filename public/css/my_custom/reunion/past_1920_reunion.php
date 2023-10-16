<?php
  header("Content-type: text/css");

  // $url_ext = "/public";
  // if ($_SERVER['SERVER_NAME'] != "www.new.bobcat.ws") {
    $url_ext = "";
  // };
?>

body {
  background: linear-gradient(to right,
    rgba(139,0,0,0.7),
    rgba(139,0,0,0.7) 50%,
    rgba(0,100,0,0.6) 50%,
    rgba(0,100,0,0.6) 100%);
  height: 1px;
}

.main {
  margin-left: 50%;
  padding-top: 12vh;
  position: absolute;
  left: -960px;
  width: 1920px;
}

.mainTitle {
  margin-left: 35%;
  margin-bottom: 8vh;
  padding-top: 14vh;
  display: block;
  font-size: 5.5rem;
  width: 60%;
}

.regIntro {
  height: 88vh;
}

.reunionIntro {
  background-size: 100% 100%, 414px 414px;
}

.regIntroDefault {
  height: 88vh;
}

.regIntroCover {
  background-image: url('/images/welcome/5INF_COA-min.png');
}

.regBttn {
  --backgroundImage: calc(88vh * 0.51);
  --bttnMargins: calc(calc(calc(1920px - 76.8px - 499.2px - var(--backgroundImage)) / 2) + var(--backgroundImage));
  margin: 0vh 0 0 48%;
  border-radius: 25px;
  padding: 15px 38.4px;
  font-size: 3rem;
  line-height: 4rem;
  width: 499.2px;
}

.regForm button {
  margin: 40px 0 0 37%;
  width: 25%;
}

.regFormFull {
  display: grid;
  grid-template-columns: 45% 45%;
  column-gap: 10%;
}

.regFormBasic input {
  margin-bottom: 20px;
}

.dateAndLocation {
  --backgroundImage: calc(88vh * 0.51);
  margin-left: var(--backgroundImage);
  font-size: 2.7rem;
  width: calc(1920px - var(--backgroundImage));
}

.regBttnIntro {
  margin-top: 6vh;
  font-size: 2.1rem;
}

.regRow {
  display: grid;
  grid-template-columns: 33% 34% 33%;
  grid-template-rows: 35vh 35vh;
}

.boxContent {
  margin: 0 0 0 50%;
  position: relative;
  /* left: -615px; */
  left: -478px;
  grid-template-columns: repeat(3,30%);
  column-gap: 6%;
  row-gap: 60px;
  /* width: 1230px; */
  width: 956px;
}

.hotelContent {
  margin: 0 0 0 50%;
  position: relative;
  /* left: -615px; */
  left: -478px;
  grid-template-columns: repeat(2,44%);
  column-gap: 6%;
  row-gap: 60px;
  /* width: 1230px; */
  width: 956px;
}

.paymentBox:last-child {
  border-bottom: none;
}

.policy {
  margin: 0 15%;
}

#hotelReservation {
  grid-column-start: 1;
  grid-column-end: 3;
}

.hotelMap {
  height: 38vh;
}

.shuttle {
  height: 55vh;
}

.reservationRow {
  display: grid;
  text-align: center;
  grid-template-columns: 40% 40%;
  grid-row-gap: 50px;
  justify-content: space-between;
}

.collageImgA {
  display: none;
}

.collageImgB {
  display: grid;
}
