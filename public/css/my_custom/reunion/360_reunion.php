<?php
  header("Content-type: text/css");

  $url_ext = "/public";
  if (!$_SERVER['SERVER_NAME'] == "www.new.bobcat.ws") {
    $url_ext = "";
  };
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
  padding-top: 5vh;
  text-align: center;
  font-size: 2.5rem;
  font-family: 'Vollkorn SC', sans-serif;
}

.dateAndLocation {
  --backgroundImage: calc(90vh * 0.256);
  margin-left: var(--backgroundImage);
  width: calc(100vw - var(--backgroundImage));
  color: white;
  font-size: 1.5rem;
  text-align: center;
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

.regIntro {
  padding: 5vh 0;
  text-align: center;
  height: 80vh;
  background:
    url('<?php echo($url_ext) ?>/images/registration/COA_right_half.png'),
    linear-gradient(
      rgba(255,255,255,0.5),
      rgba(255,255,255,0.5)),
    url('/images/registration/collage.png');
  background-repeat: no-repeat, no-repeat, repeat;
  background-size: auto 100%, cover, auto;
  background-position: left, center, left;
}

.regBttn {
  --backgroundImage: calc(90vh * 0.256);
  margin: 5vh 0 0 43%;
  margin-left: calc(var(--backgroundImage) + 1vw);
  width: calc(96vw - var(--backgroundImage));
  border-radius: 10px;
  padding: 10px 1vw;
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
  grid-template-rows: repeat(6,30vh);
}

.regSection {
  /* padding: 20px 5%; */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: white;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  font-size: 1.2rem;
  font-family: 'Bellefair', serif;
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
      rgba(0,0,0,0.3)),
    url('/images/registration/queen.jpg');
}

.dayOneSection {
  background-image:
    linear-gradient(
      rgba(0,100,0,0.8),
      rgba(0,100,0,0.3)),
    url('/images/registration/day_one.jpeg');
}

.dayTwoSection {
  background-image:
    linear-gradient(
      rgba(139,0,0,0.8),
      rgba(139,0,0,0.3)),
    url('/images/registration/day_two.jpeg');
}

.dayThreeSection {
  border-color: black;
  color: black;
  background-image:
    linear-gradient(
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.3)),
    url('/images/registration/day_three.jpeg');
}

.dayThreeSection .reunionSectBttn {
  border-color: black;
}

.dayFourSection {
  background-image:
    linear-gradient(
      rgba(0,0,0,0.8),
      rgba(0,0,0,0.3)),
    url('/images/registration/day_four.jpeg');
}

.paymentSection {
  background-image:
    linear-gradient(
      rgba(0,100,0,0.8),
      rgba(0,100,0,0.3)),
    url('/images/registration/payments.jpeg');
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

.hotelContent {

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

.wednesdayBox {
  color: white;
  background: linear-gradient(
      rgba(0,100,0,0.7),
      rgba(0,100,0,0.7));
}

.thursdayBox {
  color: white;
  background: linear-gradient(
      rgba(139,0,0,0.8),
      rgba(139,0,0,0.8));
}

.fridayBox {
  color: black;
  background: linear-gradient(
      rgba(255,255,255,0.7),
      rgba(255,255,255,0.7));
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
  background-image: url("/images/registration/olympic.jpg");
}

.winery {
  background-image: url("/images/registration/Balanced-Rock.jpg");
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
  background-image: url('/images/registration/white-star-icon-13.png');
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
  background-image: url('/images/registration/railroad-ul.jpg');
}

.upperRight {
  background-image: url('/images/registration/railroad-ur.jpg');
}

.lowerLeft {
  background-image: url('/images/registration/railroad-ll.jpeg');
}

.lowerRight {
  background-image: url('/images/registration/railroad-lr.jpeg');
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
