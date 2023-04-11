@extends('layouts.master')

@section('newsletter_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/newsletter/360_newsletter.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/newsletter/375_newsletter.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/newsletter/414_newsletter.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/newsletter/768_newsletter.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/newsletter/1366_newsletter.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/newsletter/1920_newsletter.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/newsletter/past_1920_newsletter.css">
  @include ('footer.style')
@stop

@section('newsletter_content')
  <div class="main">
    <div class="content">
      <div class="initIntro">
        <div class="mainTitle">
          The Bobcat Bulletin
        </div>
        <div class="initBttn">
          <a href="{{ url('/newsletters/'.$most_recent->year.'/'.$most_recent->filename) }}" target="_blank">Current Edition</a>
        </div>
        <div class="initBttn" id="pastBttn" onclick="scrollDown('pastEl')">
          Past Editions
        </div>
        <!-- <div class="initBttn" id="sampleBttn" onclick="scrollDown('sampleBttn')">
          Sample Edition
        </div> -->
        <div class="initBttn" id="aboutBttn" onclick="scrollDown('aboutEl')">
          About Our Bulletin
        </div>
        <div class="initBttn" id="contactBttn" onclick="scrollDown('contactEl')">
          Contact The Editor
        </div>
      </div>
      <div class="allSections">
        <div class="section searchEl" id="pastEl">
          <div class="searchTitle">
            <div class="sectionTitle">
              Find A Past Bulletin
            </div>
            <div>
              <select id="yearValue" name="year">
                <option value="null">All Years</option>
                @php
                  $all_years = [];
                @endphp
                @foreach ($all_bulletins as $one_bulletin)
                  @php
                    $new_year = true;
                    for ($i = 0; $i < count($all_years); $i++) {
                      if ($all_years[$i] == $one_bulletin->year) {
                        $new_year = false;
                      };
                    };
                  @endphp
                  @if ($new_year == true)
                    <option value="{{ $one_bulletin->year }}">{{ $one_bulletin->year }}</option>
                    @php
                      $all_years[] = $one_bulletin->year;
                    @endphp
                  @endif
                @endforeach
              </select>
              <button id="yearTrigger">
                SEARCH
              </button>
            </div>
          </div>
          <div class="scrollEl">
            @foreach ($all_bulletins as $one_bulletin)
              <a href="{{ url('/newsletters/'.$one_bulletin->year.'/'.$one_bulletin->filename) }}" target="_blank">
                <div class="onePastEl" data-year="{{ $one_bulletin->year }}">
                  {{ $one_bulletin->year }}, {{ $one_bulletin->season }}
                </div>
              </a>
            @endforeach
          </div>
        </div>
        <div class="section aboutEl" id="aboutEl">
          <div class="sectionTitle">
            About Our Bulletin
          </div>
          <div>
            The association publishes an informative and interesting newsletter sent to chapter members four times a year. It is very much a member's newsletter and the Chapter President strongly encourages broad member participation. The newsletter provides members the opportunity to:
            <ul>
              <li>
                Share their wartime experiences
              </li>
              <li>
                Send out requests for information on friends they have lost contact with
              </li>
              <li>
                Use a forum for interesting events/articles/wartime photos and other items of interest they would like to see published.
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="section" style="background:rgba(0,100,0,0.8)">
          <div class="sectionTitle">
            See A Sample Edition
          </div>
          <div>
            The Bobcat Bulletin's editions, both past and current, are exclusively for Bobcat members. However, anyone can see a full example of one by clicking here.
          </div>
        </div> -->
        <div class="section contactEl" id="contactEl">
          <div class="sectionTitle">
            Contact The Editor
          </div>
          <div class="contactIntro">
            Do you want to contribute to our bulletin? Feel free to send items for publication to:
          </div>
          <div class="contactList">
            <div class="contactEntry">
              <u>Mail</u></br>
              Fred Deverse</br>
              138 Glenrise Road</br>
              Swanton, MD 21561
            </div>
            <div class="contactEntry">
              <u>Email</u></br>
              fpd@Bobcat.ws
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
  <script>
    // Scrolls down to selected sectioon
    function scrollDown(id) {
      var mainEl = document.getElementById(id);
      console.log(mainEl);
      mainEl.scrollIntoView({behavior:'smooth',block:'center',inline:'center'});
    };

    // Filters to certain year
    var initAllEl = document.querySelectorAll('[data-year]');
    var index = 0;
    initAllEl.forEach(function(oneEl) {
      if (index % 2 == 0) {
        oneEl.style["background-color"] = "rgba(0,0,0,0.1)";
      };
      index++;
    });

    var buttonEl = document.getElementById("yearTrigger");

    buttonEl.addEventListener("click", function() {
      var yearEl = document.getElementById("yearValue");
      var year = yearEl.value;
      var allEl = document.querySelectorAll('[data-year]');
      var i = 0;
      allEl.forEach(function(element) {
        if (element.dataset.year == year || year == "null") {
          element.style.display = "block";
          if (i % 2 == 0) {
            element.style["background-color"] = "rgba(0,0,0,0.1)";
          } else {
            element.style["background-color"] = "rgba(255,255,255,1)";
          };
          i++;
        } else {
          element.style.display = "none";
        };
      });
    });

  </script>
@stop