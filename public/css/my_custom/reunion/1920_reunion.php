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
  --backgroundImage: calc(88vh * 0.51);
  margin-left: calc(var(--backgroundImage) + 2vw);
  margin-bottom: 8vh;
  padding-top: 8vh;
  display: block;
  font-size: 5.5rem;
  width: calc(92vw - var(--backgroundImage));
}

.regIntro {
  padding: 4vh 0;
  background-image: url('<?php echo($url_ext) ?>/images/welcome/5INF_COA-min.png'),
    linear-gradient(
      rgba(255,255,255,0.5),
      rgba(255,255,255,0.5)),
    url('<?php echo($url_ext) ?>/images/registration/collage.png');
}

.regBttn {
  --backgroundImage: calc(88vh * 0.51);
  /* In the bttnMargin variable below, the 70vw is based on the desired button width (26vw) and left/right paddings (2vw) subtracted from the total width, 100vw. Subtracting the image's width (backgroundImage) gives the sum of left/right margins, so dividing by two gives one margin. Finally, adding the backgroundImage width uses the desired margin-left immediately past the background image  */
  --bttnMargins: calc(calc(calc(70vw - var(--backgroundImage)) / 2) + var(--backgroundImage));
  margin: 6vh 0 0 48%;
  margin-left: var(--bttnMargins);
  border-radius: 25px;
  padding: 15px 2vw;
  font-size: 3rem;
  line-height: 4rem;
  /* width: 30%; */
  width: 26vw;
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
