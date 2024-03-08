<?php
  header("Content-type: text/css");

  // $url_ext = "/public";
  // if ($_SERVER['SERVER_NAME'] != "new.bobcat.ws") {
    $url_ext = "";
  // };
?>

.main {
  padding-top: 10vh;
  background: repeating-linear-gradient(
      -45deg,
      grey,
      white 100px,
      grey 130px,
      white 180px,
      grey 300px,
      white 410px,
      grey 550px)
}

.content {
  min-height: 90vh;
}

.mainTitle {
  display: flex;
  flex-direction: column;
  margin: 0 0 10vh 0;
  padding-top: 15vh;
  text-align: center;
  font-size: 2.5rem;
  font-family: 'Vollkorn SC', sans-serif;
  height: 15vh;
}

.dateAndLocation {
  --backgroundImage: calc(90vh * 0.256);
  margin-left: var(--backgroundImage);
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: white;
  font-size: 1.5rem;
  text-align: center;
  height: 7vh;
  width: calc(100vw - var(--backgroundImage));
}

.reunionDate {
  /* border-radius: 20px 0 0 0; */
  padding: 3vh 0 1vh 0;
  background:
    linear-gradient(
      0deg,
      rgba(0,100,0,0.8),
      rgba(0,100,0,0.8) 70%,
      transparent);
}

.reunionLocation {
  /* border-radius: 0 0 0 20px; */
  padding: 1vh 0 3vh 0;
  background:
    linear-gradient(
      180deg,
      rgba(162,34,41,0.9),
      rgba(162,34,41,0.9) 70%,
      transparent);
}

.reunionIntro {
  background: linear-gradient(
          rgba(255,255,255,0.5),
          rgba(255,255,255,0.5)),
          url('/images/events/collage-test.png');
  background-repeat: no-repeat, repeat;
  background-size: 100% 100%, 360px 360px;
  background-position: left, center;
}

.regIntro {
  text-align: center;
  height: 90vh;
}

.regIntroDefault {
  padding: 0;
  text-align: center;
  height: 90vh;
  background:
    /* url('/images/registration/COA_right_half.png'), */
    linear-gradient(
      rgba(255,255,255,0.5),
      rgba(255,255,255,0.5)),
    url('/images/registration/collage.png');
  background-repeat: no-repeat, repeat;
  background-size: cover, auto;
  background-position: center, left;
}

.regIntroCover {
  background-image: url('/images/registration/COA_right_half.png');
  background-repeat: no-repeat;
  background-size: auto 100%;
  background-position: left;
  height: 100%;
  width: 100%;
}

.regBttnOverall {
  margin-top: 5vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.regBttnIntro {
  margin-bottom: 0px;
  font-size: 1.1rem;
  font-family: 'Special Elite', cursive;
  color: black;
  background-image: linear-gradient(
    rgba(256,256,256,0) 0%,
    rgba(256,256,256,0.7) 15%,
    rgba(256,256,256,0.7) 85%,
    rgba(256,256,256,0) 100%
  );
}

.regBttn {
  --backgroundImage: calc(90vh * 0.256);
  margin: 0 0 0 43%;
  margin-left: calc(var(--backgroundImage) + 1vw);
  width: calc(96vw - var(--backgroundImage));
  border-radius: 10px;
  padding: 2vh 1vw;
  text-align: center;
  color: white;
  font-family: 'Special Elite', cursive;
  font-size: 1.5rem;
  background-color: rgba(0,100,0,1);
  /* width: 45%; */
  cursor: pointer;
}

.regForm {
  padding: 30px 10%;
  color: white;
  font-family: 'Vollkorn SC', sans-serif;
  display: none;
  background-color: rgba(0,0,0,0.6);
}

.regForm div:last-child {
  margin-top: 30px;
}

.regFormBasic:last-of-type {
  margin: 20px 0;
}

.regFormBasic input {
  margin-bottom: 5px;
  font-size: 1.1rem;
  width: 100%;
}

.regFormSubtitles {
  margin: 25px 0 10px 0;
  font-size: 1.3rem;
}

.regFormSubtitles:first-of-type {
  margin-top: 0;
}

.radioTypeBox {
  margin-bottom: 30px;
}

.commentArea {
  border-width: 0;
  padding: 0;
  width: 100%;
}

.regForm button {
  margin: 40px 0 0 24%;
  border: 2px solid white;
  border-radius: 20px;
  padding: 10px;
  color: white;
  font-size: 1.5rem;
  background-color: rgba(0,100,0,1);
  width: 52%;
}

.disabledSubmitBttn {
  margin: 40px 0 0 24%;
  display: none;
  border: 2px solid white;
  border-radius: 20px;
  padding: 10px;
  color: white;
  font-size: 1.5rem;
  font-family: 'Arial';
  text-align: center;
  background-image: 
    url('/images/items/loading-gif-2.gif'),
    linear-gradient(
      rgba(137,206,137,1),
      rgba(137,206,137,1));
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  width: 44%;
}

.regText {
  padding: 10px 5% 0 5%;
}

.regInputTitle {
  margin: 30px 0 0 5%;
  font-size: 1.1rem;
}

.regText input {
  font-size: 1.1rem;
  overflow-x: scroll;
  width: 95%;
}

.regText textarea {
  font-size: 1.1rem;
  height: 200px;
  width: 95%;
}

.regForm select {
  margin: 10px 0 0 5%;
  font-size: 1.1rem;
  width: 90%;
}

.regCheckbox {
  margin: 10px 7% 0 5%;
  border-radius: 5px;
  padding: 5px 2%;
  color: white;
  font-size: 1.1rem;
  background-color: rgba(0,100,0,0.8);
}

.regFormTitle {
  margin: 0 0 20px 0;
  padding-top: 40px;
  font-size: 1.3rem;
  font-family: 'Special Elite', cursive;
  color: white;
  text-align: center;
  text-decoration: underline;
}

.theOr {
  font-size: 1.2rem;
  text-align: center;
}

.regForm a {
  text-decoration: underline;
  color: white;
}

.mailingInfo {
  padding: 0 5%;
  font-size: 1.2rem;
}

.mailingInfo div {
  margin-top: 15px;
  border-radius: 10px;
  padding: 15px 0;
  text-align: center;
  background-color: rgba(139,0,0,1);
}

.submitBttn {
  padding: 30px 5%;
  display: flex;
  justify-content: center;
}

.submitBttn input[type="submit"] {
  border-radius: 10px;
  padding: 10px 5%;
  color: white;
  font-size: 1.5rem;
  background-color: rgba(139,0,0,1);
}

.regRow {
  display: grid;
  grid-template-columns: 100%;
  grid-auto-rows: 30vh;
}

.regSection {
  /* padding: 20px 5%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center; */
  color: white;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  font-size: 1.2rem;
  font-family: 'Bellefair', serif;
}

.regSectionCoating {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;;
  width: 100%;
  height: 30vh;
}

.regSection a {
  color: white !important;
}

.reunionSectBttn {
  border: 2px solid white;
  padding: 5px;
  cursor: pointer;
}

.hotelSection {
  background-image:
    linear-gradient(
      rgba(0,0,0,0.8),
      rgba(0,0,0,0.3));
}

.dayOneSection {
  background-image:
    linear-gradient(
      rgba(0,100,0,0.8),
      rgba(0,100,0,0.3));
}

.dayTwoSection {
  background-image:
    linear-gradient(
      rgba(139,0,0,0.8),
      rgba(139,0,0,0.3));
}

.dayThreeSection {
  border-color: black;
  color: black;
  background-image:
    linear-gradient(
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.3));
}

.dayThreeSection .reunionSectBttn {
  border-color: black;
}

.dayFourSection {
  background-image:
    linear-gradient(
      rgba(0,0,0,0.8),
      rgba(0,0,0,0.3));
}

.paymentSection {
  background-image:
    linear-gradient(
      rgba(0,100,0,0.8),
      rgba(0,100,0,0.3));
}

.bottomPaymentSection {
  background-image: url('/images/events/subevents/payments.jpeg');
}

.reunionSectBox {
  display: none;
  font-family: 'Bellefair', serif;
}

.boxTitle {
  margin: 0 0 5vh 0;
  padding-top: 10vh;
  font-size: 2.5rem;
  font-style: italic;
  text-align: center;
}

.boxContent {
  margin: 0 5%;
  padding-bottom: 5vh;
  display: grid;
  font-size: 1.3rem;
}

.boxContent div {
  margin-bottom: 25px;
}

.boxContent div:last-child {
  margin-bottom: 0px;
}

.boxTime {
  text-align: center;
}

.hotelContent {

}

.hotelContent div iframe {
  height: 450px;
  width: 100%;
}

.boxContent a {
  color: white;
  text-decoration: underline;
  cursor: pointer;
}

.paymentBox {
  border-top: 2px dashed white;
  padding-top: 10px;
}

.paymentBox:last-child {
  border-bottom: 2px dashed white;
}

.boxTotal {
  width: 100%;
}

.rowIntro {
  margin-bottom: 30px;
  text-align: center;
}

.reservationRow {
  display: grid;
  grid-row-gap: 20px;
  text-align: center;
}

.hotelBox {
  color: white;
  background: linear-gradient(
      rgba(0,0,0,0.8),
      rgba(0,0,0,0.8));
}

.dayOneBox {
  color: white;
  background: linear-gradient(
      rgba(0,100,0,0.7),
      rgba(0,100,0,0.7));
}

.dayTwoBox {
  color: white;
  background: linear-gradient(
      rgba(139,0,0,0.8),
      rgba(139,0,0,0.8));
}

.dayThreeBox {
  color: black;
  background: linear-gradient(
      rgba(255,255,255,0.7),
      rgba(255,255,255,0.7));
}

.dayFourBox {
  color: white;
  background: linear-gradient(
      rgba(0,0,0,0.8),
      rgba(0,0,0,0.8));
}

.boxSubtitle {
  margin-bottom: 15px;
  font-size: 1.5rem;
  text-decoration: underline;
}

.boxSubcontent {
  margin-bottom: 30px;
}

.paymentSubcontent div {
  margin-bottom: 20px;
}

.policy {
  margin: 0 5%;
  padding-bottom: 50px;
  font-size: 1.5rem;
}

.hotelMap {
  padding: 0 0 5vh 0;
  height: 50vh;
}

.hotelMap iframe {
  border-width: 0px;
  width: 100%;
  height: 100%;
}

.reunionBoxImg {
  margin-bottom: 5vh;
  background-size: cover;
  background-position: center;
  height: 40vh;
  width: 100%;
}

.shuttle {
  background-image: url('<?php echo($url_ext) ?>/images/registration/olympic.jpg');
}

.winery {
  background-image: url('<?php echo($url_ext) ?>/images/registration/Balanced-Rock.jpg');
}

.memorialList {
  margin: 30px 0 60px 0;
  display: grid;
  grid-template-columns: 5% 95%;
  grid-template-rows: repeat(10, 30px);
  grid-column-gap: 4%;
  grid-row-gap: 7px;
}

.listBullet {
  background-image: url('<?php echo($url_ext) ?>/images/registration/white-star-icon-13.png');
  background-position: center;
  background-size: contain;
  background-repeat: no-repeat;
}

.listText {
  line-height: 30px;
}

.memorialCollage {
  display: grid;
  grid-template-columns: 49% 49%;
  grid-template-rows: 49% 49%;
  grid-gap: 2%;
}

.collageImgA {
  /* display: inherit; */
}

.collageImgB {
  display: none;
}

.oneCorner {
  background-size: cover;
  background-position: center;
}

.upperLeft {
  background-image: url('<?php echo($url_ext) ?>/images/registration/railroad-ul.jpg');
}

.upperRight {
  background-image: url('<?php echo($url_ext) ?>/images/registration/railroad-ur.jpg');
}

.lowerLeft {
  background-image: url('<?php echo($url_ext) ?>/images/registration/railroad-ll.jpeg');
}

.lowerRight {
  background-image: url('<?php echo($url_ext) ?>/images/registration/railroad-lr.jpeg');
}

.army_museum {
  background-image: url("");
}

.mealList {
  margin-bottom: 15px;
  border: 1px dashed white;
  padding: 5px 1%;
  display: grid;
  grid-template-columns: 75% 15%;
  grid-gap: 20px 10%;
}

.banquetList {
  margin-bottom: 15px;
  /* border: 1px dashed white; */
  padding: 5px 1%;
  display: grid;
  grid-template-columns: 55% 40%;
  grid-gap: 20px 5%;
}

.reserveBttn {
  border: 5px solid white;
  padding: 20px;
  background-color: rgba(0,100,0,0.8);
  text-align: center;
  color: white;
  /* text-decoration: none !important; */
}

/* .regSubtitle {
  margin-bottom: 20px;
  font-size: 1.4rem;
  font-family: 'Vollkorn SC', sans-serif;
  text-align: center;
}

.qualTitle {
  margin: 15px 0 10px 0;
  font-size: 1.3rem;
  text-align: center;
  text-decoration: underline;
}

.costList {
  margin: 20px 0;
}

.costTitle {
  margin-top: 30px;
  border-radius: 0 10px 10px 0;
  padding: 10px 0 10px 5%;
  font-size: 1.2rem;
  background-color: rgba(139,0,0,1);
  width: 85%;
}

.costInLine {
  display: none;
}

.costNumbers {
  margin-top: 10px;
  padding-right: 10%;
  text-align: right;
  font-size: 1.6rem;
} */
