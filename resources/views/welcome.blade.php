@extends('layouts.master')

@section('welcome_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/welcome/360_welcome.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/welcome/375_welcome.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/welcome/414_welcome.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/welcome/768_welcome.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/welcome/1366_welcome.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/welcome/1920_welcome.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/welcome/past_1920_welcome.css">
  @include ('footer.style')
@stop

@section('welcome_content')
  <div class="introBody introBodyMax">
    <div class="introBody introImage introIraq"></div>
    <div class="introBody introImage introAfghanistan"></div>
    <div class="introBody introImage introVietnam"></div>
    <div class="introBody introImage introKorea"></div>
    <div class="introBody introImage introWW2"></div>
    <div class="introBody introImage introFrontier"></div>
    <div class="introBody introImage intro1812"></div>
  </div>
  <div class="introBody">
    <div class="mainTitle">
      <div>5th Infantry</div>
      <div>Regiment</div>
      <div>Association</div>
    </div>
    <div id="bottomView" class="bottomView">
      <div>LEARN MORE BELOW</div>
    </div>
  </div>
  <div class="lowerBody">
    <div id="welcomeTitle" class="sectionTitle">Home of the Bobcats</div>
    <div class="sectionContent welcomeContent">
      This organization is dedicated to all of the past, present, and future members of the United States Army's <u>5th Infantry Regiment</u>, commonly known as the "Bobcats". The 5th Regiment (or its ancestral regiments) has participated in nearly every major American conflict since 1808. Its soldiers are the sinews of the Regiment, both in peace and in war. They are the fabric of its history and its tradition.
    </div>
    <div class="allCompartments">
      <div class="oneCompartment desktopTitle">
        <div class="sectionTitle pastTitle">
          Reflect On Our Past
        </div>
        <div class="sectionTitle presentTitle">
          Act In Our Present
        </div>
        <div class="sectionTitle futureTitle">
          Join In Our Future
        </div>
      </div>
      <div class="oneCompartment">
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle pastTitle mobileTitle">
            Reflect On Our Past
          </div>
          <div class="sectionContent pastContent">
            <div>
              The 5th Regiment has a unique and exciting military history spanning over 200 years. Here you can discover the Regiment's origin, read about it's role at any given time period, and even review a book dedicated to the Regiment.
            </div></br>
            <div>
              Additionally, you can find the names of every 5th Regiment soldier that recieved the Medal of Honor, every soldier that died as a result of their service, and every deceased member of the Association.
            </div>
          </div>
        </div>
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle presentTitle mobileTitle">
            Act In Our Present
          </div>
          <div class="sectionContent presentContent">
            The 5th Regiment Infantry Association is a very active organization. It carries out an official reunion every year, and members receive updates in the Association's regular newsletters. It also maintains frequent communications with the active Army units that currently bear our Regiment's crest. Finally, the Association often works to raise money and support for our active duty soldiers, fellow members, and related worthwhile causes.
          </div>
        </div>
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle futureTitle mobileTitle">
            Join In Our Future
          </div>
          <div class="sectionContent futureContent">
            <div>
              The 5th Infantry Regiment Association's door is always open to every honorable soldier that has served as part of the 5th Infantry Regiment, be they past or present. It also accepts "associate members", meaning any family member of a Bobcat veteran. Members can update their personal profile, communicate with other members easier, read any newsletter, and purchase members-only merchandise.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
      <a href="{{ url('/') }}">
        <div>HOME</div>
      </a>
      <a>
        <div>ASSOCIATION</div>
      </a>
      <div>HISTORY</div>
      <div>HALL OF HONOR</div>
      <div>PHOTO ALBUM</div>
      <div>MEMBERS ONLY</div>
    </div> -->
    @include ('footer.content')
  </div>
@stop
