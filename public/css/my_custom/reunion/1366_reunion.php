<?php
  header("Content-type: text/css");

  // $url_ext = "/public";
  // if ($_SERVER['SERVER_NAME'] != "new.bobcat.ws") {
    $url_ext = "";
  // };
?>

.main {
  padding-top: 12vh;
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

.regIntroDefault {
  height: 88vh;
}

.regIntroCover {
  background-image: url('/images/welcome/5INF_COA-min.png');
}

.regBttn {
  --backgroundImage: calc(88vh * 0.51);
  margin: 0vh 0 0 0;
  margin-left: calc(var(--backgroundImage) + 2vw);
  border-radius: 25px;
  padding: 15px 2vw;
  font-size: 3rem;
  line-height: 4rem;
  /* width: 30%; */
  font-size: 2.7rem;
  width: calc(92vw - var(--backgroundImage));
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
  width: calc(100vw - var(--backgroundImage));
}

.regBttnIntro {
  margin-top: 6vh;
  font-size: 2.1rem;
}

.regRow {
  display: grid;
  grid-template-columns: 33% 34% 33%;
  grid-auto-rows: 35vh;
}

.boxContent {
  margin: 0 15%;
  grid-template-columns: repeat(2,47%);
  column-gap: 6%;
  row-gap: 60px;
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
  grid-template-columns: 40% 40%;
  grid-row-gap: 50px;
  justify-content: space-between;
}
