<?php
  header("Content-type: text/css");

  $url_ext = "public/";
  if ($_SERVER['SERVER_NAME'] != "new.bobcat.ws") {
    $url_ext = "";
  };
?>

p {
  margin: 0;
}

.mainBody {
  padding-top: 10vh;
  background:
    repeating-linear-gradient(
      -45deg,
      grey,
      white 100px,
      grey 130px,
      white 180px,
      grey 300px,
      white 410px,
      grey 550px);
}

.mainBody div {

}

.backBttn {
  margin: 10px 0;
  display: flex;
  font-family: 'Special Elite', cursive;
  text-align: center;
}

.backBttn a {
  color: black;
}

.timelineBox {
  position: sticky;
  top: 10vh;
  z-index: 1;
  overflow-x: scroll;
}

.timelineBar {
  display: flex;
  width: 1800px;
  height: 7vh;
}

.timelineBar div {
  padding-top: 2px;
  display: flex;
  align-items: center;
  color: white;
  font-family: 'Special Elite', cursive;
  font-size: 1rem;
  background:
    linear-gradient(90deg, black, transparent 5%, transparent 95%, black),
    linear-gradient(0deg, black, transparent 13%, transparent 87%, black),
    grey;
  width: 150px;
  cursor: pointer;
}

.timelineBar a div {
  padding-top: 2px;
  display: flex;
  align-items: center;
  color: white;
  font-family: 'Special Elite', cursive;
  font-size: 1rem;
  background:
    linear-gradient(90deg, black, transparent 5%, transparent 95%, black),
    linear-gradient(0deg, black, transparent 13%, transparent 87%, black),
    grey;
  width: 150px;
  height: calc(100% - 2px);
  cursor: pointer;
}

.timelineBar div div {
  text-align: center;
  background: transparent;
  justify-content: center;
}

.timelineBar a div div {
  text-align: center;
  background: transparent;
  justify-content: center;
}

.timeSegment {
  margin: 50px 2% 0 2%;
  border: 1px solid black;
  padding: 15px 3%;
}

.vietnamLogSegment {
  background-color: white;
}

.nonTimeSegment {
  margin: 0px 2% 0 2%;
  border: 1px solid black;
  padding: 15px 3%;
}

.subChapters {
  margin: 0 0 10px 10%;
  display: grid;
  grid-template-columns: 45% 45%;
  text-decoration: none;
}

.warOf1812Segment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/lundy_lane_map.jpg');
  background-position: center;
  background-size: cover;
}

.img1812 {
  background-image:url('/<?php echo($url_ext) ?>images/history/BattleofLundysLane.jpg');
}

.mexicanWarSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.7),
      rgba(255,255,255,0.7)),
    url('/<?php echo($url_ext) ?>images/history/mexican_war_map.jpg');
  background-position: center;
  background-size: cover;
}

.imgMexican {
  background-image:url('/<?php echo($url_ext) ?>images/history/Palo_Alto_nebel.jpg');
}

.civilWarSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/civil_war_map.jpg');
  background-position: center;
  background-size: cover;
}

.imgCivilWar {
  background-image:url('/<?php echo($url_ext) ?>images/history/Burning-of-Wagon-Train-at-Apache-Canyon.jpg');
}

.indianWarSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.7),
      rgba(255,255,255,0.7)),
    url('/<?php echo($url_ext) ?>images/history/bear_paw_map.png');
  background-position: center;
  background-size: cover;
}

.imgIndianWar {
  background-image:url('/<?php echo($url_ext) ?>images/history/Montana_1879.jpg');
}

.occupationSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.6),
      rgba(255,255,255,0.6)),
    url('/<?php echo($url_ext) ?>images/history/philippine_islands_1909.jpg');
  background-position: center;
  background-size: cover;
}

.ww1Segment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/panama_canal_map.jpg');
  background-position: center;
  background-size: cover;
}

.ww2Segment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/71st_IN_DIV_map.jpeg');
  background-position: center;
  background-size: cover;
}

.koreanSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/korean_war_map.jpg');
  background-position: center;
  background-size: cover;
}

.preVietnamSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/1950_USHighways_map.jpg');
  background-position: center;
  background-size: cover;
}

.vietnameSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/ben_cui_map.jpg');
  background-position: center;
  background-size: cover;
}

.southKoreaSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/south_korea_map.jpg');
  background-position: center;
  background-size: cover;
}

.gwotSegment {
  background:
    linear-gradient(
      to right,
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
    url('/<?php echo($url_ext) ?>images/history/GWOT_2014_map.png');
  background-position: center;
  background-size: cover;
}

.firstTimeSegment {
  margin-top: 0;
}

.allSegments {
  padding: 10px 0;
}

.segmentTitle {
  margin-bottom: 20px;
  text-align: center;
  font-family: 'Vollkorn SC', sans-serif;
  font-size: 2rem;
}

.segmentImg {
  background-size: cover;
  background-position: center;
}

.imgBig {
  height: 40vh;
  width: 100%;
}

.imgSmall {
  height: 25vh;
  width: 100%;
}

.imgExtraSmall {
  height: 15vh;
  width: 100%;
}

.imgLeft {
  margin: 0 5% 20px 0;
  float: left;
}

.imgRight {
  margin: 0 0 20px 5%;
  float: right;
}

.segmentWords {
  /* text-align: justify; */
}

.segmentWords p {
  margin-bottom: 20px;
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
}

.segmentWords p:last-child {
  margin-bottom: 0px;
}

.segmentWords ul {
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
}

.segmentWords ol {
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
}

.segmentLinks {
  /* margin: 30px 0; */
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
}

.oneMonth {
  margin: 50px 0 10px 0;
  border-radius: 0 45px 0 0;
  padding: 10px 0 5px 0;
  color: white;
  font-family: 'Special Elite', cursive;
  text-align: center;
  background-color: darkred;
  width: 50%;
}

.vietnamLogLinkBox {
  border-radius: 10px;
  background-color: darkgreen;
}

.vietnamLogLinkBox ul li {
  padding-bottom: 20px;
  padding: 10px 4%;
  color: white;
}

.vietnamLogLinkBox ul li a {
  color: white;
  cursor: pointer;
}

.linkBox {
  margin-top: 20px;
  border-radius: 15px;
  color: white;
  background-color: rgba(128,128,128,1);
}

.linkTitle {
  border-radius: 15px 15px 0 0;
  padding: 10px 5%;
  text-align: center;
}

.learnMore {
  background-color: rgba(0, 100, 0, 1);
}

.externalLink {
  background-color: rgba(139,0,0,1);
}

.linkContent {
  margin-top: 0;
  padding-top: 10px;
  padding-left: 10%;
  padding-right: 10%;
  background-color: transparent;
}

.linkContent a {
  color: white;
  text-decoration-line: underline;
  cursor: pointer;
}

.linkContent li {
  padding-bottom: 10px;
}

.author {
  margin: 50px 0;
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
  text-align: center;
}

/* For topics only */

.topicSegment {
  background-color: white;
}

.audioClip {
  border-radius: 10px;
  padding: 5px;
  background-color: darkred;
}

.quoteSection {
  border: 1px dashed black;
  padding: 10px 5%;
}

.sessionTime {
  margin: 5px 0 10px 0;
  padding: 5px 2%;
  color: white;font-size: 1rem;
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
  text-align: center;
  background-color: darkgrey;
}

.referenceList {
  margin-top: 50px;
  font-size: 1rem;
  font-family: 'Bellefair', serif;
}

.timeTitle {
  margin-bottom: 20px;
  display: block !important;
  text-align: center;
  text-decoration: underline;
}

.timeList div {
  padding-bottom: 5px;
  display: flex;
  justify-content: space-between;
}

.witnessList {
  margin-top: 30px;
}

.witnessList div {
  margin-bottom: 20px;
  text-align: center;
}

.witnessTitle {
  margin-bottom: 50px !important;
  text-decoration: underline;
}

.witnessList div:first-child {
  margin-bottom: 0px;
}

.benCuiAlbumRow {
  display: flex;
  justify-content: center;
}

.benCuiAlbumBttn {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: black;
  text-decoration-line: none;
  border: 1px solid grey;
  border-radius: 15px;
  background:
    radial-gradient(
      rgba(255,255,255,0.7) 0%,
      rgba(255,255,255,0.7) 50%,
      rgba(255,255,255,0) 100%),
    url('/images/history/ben_cui.jpg');
  background-size: cover;
  background-position: center;
  width: 300px;
  height: 300px;
  cursor: pointer;
}

.benCuiAlbumBttn div {
  font-family: 'Special Elite', cursive;
  font-size: 3.3rem;
  text-align: center;
}

.benCuiAlbumBttn div:first-child {
  padding-bottom: 30px;
}

.benCuiForumBttn {
  background:
    radial-gradient(
      rgba(255,255,255,0.7) 0%,
      rgba(255,255,255,0.7) 50%,
      rgba(255,255,255,0) 100%),
    url('/images/history/topics/ben_cui/burlingame_forum.jpeg');
  background-position: center;
  background-size: cover;
}

.presCitationBttn {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: black;
  text-decoration-line: none;
  border: 1px solid grey;
  border-radius: 15px;
  width: 300px;
  height: 300px;
  cursor: pointer;
}

.presCitationBttn div {
  font-family: 'Special Elite', cursive;
  font-size: 3.3rem;
  text-align: center;
}

.presCitationBttn div:first-child {
  padding-bottom: 30px;
}

.presSeal {
  background:
    radial-gradient(
      rgba(255,255,255,0.7) 0%,
      rgba(255,255,255,0.7) 50%,
      rgba(255,255,255,0) 100%),
    url('/images/history/topics/ben_cui/pres_seal.png');
  background-size: cover;
  background-position: center;
}

.secOfArmySeal {
  background:
    radial-gradient(
      rgba(255,255,255,0.7) 0%,
      rgba(255,255,255,0.7) 50%,
      rgba(255,255,255,0) 100%),
    url('/images/history/topics/ben_cui/sec_of_army_seal.png');
  background-size: cover;
  background-position: center;
}

.casualtyBox {
  margin-bottom: 20px;
  border: 1px solid darkgrey;
  display: block;
  font-family: 'Special Elite', cursive;
}

.casualtyTitle {
  border-bottom: 1px solid darkgrey;
  padding: 20px 3%;
  text-align: center;
  color: rgba(41,21,61,0.8);
  font-size: 2rem;
  background: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.9) 20%,rgba(255,255,255,0.9) 80%,rgba(255,255,255,0.7)),url('/images/history/purple_heart.jpg');
  background-position: center;
  background-size: cover;
}

.casualtyList {
  padding: 10px 3% 10px 11%;
  background: linear-gradient(90deg, white, white 10%, rgba(41,21,61,0.8) 10%, rgba(41,21,61,0.8) 90%, white 90%, white);
  overflow-y: scroll;
  max-height: 300px;
}

.oneCasualty {
  margin-bottom: 15px;
  display: flex;
  justify-content: space-between;
  color: gold;
  font-size: 1.1rem;
}

.fullArrow {
  border: 1px solid gold;
  border-radius: 30px;
  padding: 5px;
  display: block;
  background-color: rgba(41,21,61,0.8);
  height: 15px;
  width: 15px;
}

.topArrowHalf {
  background: linear-gradient(45deg, transparent, transparent 40%, gold 40%, gold 60%, transparent 60%, transparent);
  height: 50%;
}

.bottomArrowHalf {
  background: linear-gradient(-45deg, transparent, transparent 40%, gold 40%, gold 60%, transparent 60%, transparent);
  height: 50%;
}

.mohBttn {
  justify-content: space-between;
  background:
    linear-gradient(
      0deg,
      transparent,
      transparent 10%,
      rgba(0,0,0,0.7) 15%,
      rgba(0,0,0,0.7) 35%,
      transparent 40%,
      transparent 60%,
      rgba(0,0,0,0.7) 65%,
      rgba(0,0,0,0.7) 85%,
      transparent 90%),
    url("/images/history/designing-moh-square.jpg");
  background-position: center;
  background-size: cover;
}

.mohBttn div {
  font-size: 1.8rem;
  color: white;
}

.mohBttn div:first-child {
  margin-top: 18%;
  padding-bottom: 0;
}

.mohBttn div:last-child {
  margin-bottom: 18%;
}

.forumPanelBox {
  margin-top: 50px;
  display: flex;
  flex-direction: column;
}

.onePanelBox {
  margin-bottom: 50px;
  border: 1px solid rgba(0,0,0,0.2);
  border-left: none;
  border-radius: 0 20px 20px 0;
  padding: 10px 0;
  display: grid;
  grid-template-columns: 47% 47%;
  column-gap: 6%;
  grid-template-rows: auto 200px;
  row-gap: 15px;
  font-size: 1.3rem;
  font-family: 'Bellefair';
  background-color: rgba(0,0,0,0.1);
}

.onePanelTitle {
  grid-area: 1/1/2/3;
  font-size: 1.5rem;
  text-align: center;
  font-family: 'Special Elite', cursive;
}

.onePanelImg {
  border-left: none;
  border-radius: 0 20px 20px 0;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.onePanelBio {
  padding-right: 3%;
  display: flex;
  font-size: 1.3rem;
  flex-direction: column;
  justify-content: center;
}

.allForumVideos {
  padding: 10px 0;
  border-radius: 0 0 5px 5px;
  background-color: rgba(128,128,128,0.6);
}

.oneForumVideo {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
}

.oneForumVideo iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* height: 200px;
  width: 100%; */
}

.allVideoBttn {
  display: flex;
  justify-content: space-between;
}

.oneVideoBttn {
  border-radius: 10px 10px 0 0;
  padding: 10px 0;
  font-size: 1.2rem;
  color: white;
  text-align: center;
  background-color: rgba(0,100,0,1);
  width: 50px;
}

#button1 {
  background-color: rgba(139,0,0,1);
}

#button2 {

}

#button3 {

}

#button4 {

}

#button5 {

}

#video1 {

}

#video2 {
  display: none;
}

#video3 {
  display: none;
}

#video4 {
  display: none;
}

#video5 {
  display: none;
}

#anderson {
  background-image:
    url("/images/history/forum_Anderson.png"),
    linear-gradient(
      rgba(0,0,0,0),
      rgba(0,0,0,0));
}

#snodgrass {
  background-image:
    url("/images/history/forum_Snodgrass.png"),
    linear-gradient(
      rgba(0,0,0,0),
      rgba(0,0,0,0));
}

#cook {
  background-image:
    url("/images/history/forum_Cook.png"),
    linear-gradient(
      rgba(0,0,0,0),
      rgba(0,0,0,0));
}

#framer {
  background-image:
    url("/images/history/forum_Framer.png"),
    linear-gradient(
      rgba(0,0,0,0),
      rgba(0,0,0,0));
}

#young {
  background-image:
    url("/images/history/forum_Young.png"),
    linear-gradient(
      rgba(0,0,0,0),
      rgba(0,0,0,0));
}

/* For After Action Reports only */

.aarSegment {
  display: none;
}

.aarHqAddress {
  text-align: center;
}

.aarTopic {
  margin-bottom: 25px;
}

.topicTitle {
  text-decoration: underline;
}

.casListTitle {
  text-align: center;
}

.columnNames {
  margin-top: 20px;
  margin-bottom: 10px;
  text-align: center;
  border-bottom: 1px solid black;
}

.columnNames div:nth-child(2) {
  border-left: 1px solid black;
  border-right: 1px solid black;
}

.casUnitName {
  margin-top: 10px;
  margin-bottom: 5px;
  text-align: center;
  border-bottom: 1px dashed black;
}

.casUnitList {
  display: grid;
  grid-template-columns: 50% 35% 15%;
  font-size: 1rem;
}

.aarWords {
  font-size: 1.3rem;
  font-family: 'Bellefair', serif;
}
