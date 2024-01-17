<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="5th Infantry Regiment Association">
    <!-- <meta property="og:description" content=""> -->
    <!-- <meta property="og:description" content=""> -->

    <title>@if (isset($page_title)) {{$page_title}} | @endif 5th Infantry Regiment Association</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Bellefair&family=Bellota+Text&family=Black+Ops+One&family=Charm&family=Cinzel&family=IM+Fell+English+SC&family=Italianno&family=Nanum+Myeongjo&family=News+Cycle&family=Prompt&family=Special+Elite&family=Spectral+SC&family=Staatliches&family=Stardos+Stencil&family=Thasadith&family=Vollkorn+SC&display=swap" rel="stylesheet">

    
    <!-- CSS -->
    <!-- Welcome Styles -->
    <!-- Default CSS files; 0px -> 360px-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/360_welcome.css">
    <!-- 361px -> 375px-->
    <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/375_welcome.css">
    <!-- 376px -> 414px-->
    <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/414_welcome.css">
    <!-- 415px -> 768px-->
    <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/768_welcome.css">
    <!-- 769px -> 1366px-->
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/1366_welcome.css">
    <!-- 1367px -> 1920px-->
    <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/1920_welcome.css">
    <!-- 1921px and Greater -->
    <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/welcome/past_1920_welcome.css">

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src=<?php echo($js) ?>></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K2MS5EG7YX"></script>
    <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-K2MS5EG7YX');
    </script> -->
    <!-- Google ReCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>
  <body>
    <div class="introBody introBodyMax">
    </div>
    <div class="introBody">
      <div class="errorTitle" style="width:90%;margin-left:5%;margin-top:0vh">
        <div style="height:150px;background-image:url('/images/welcome/5INF_COA-min.png');background-position:center;background-size:contain;background-repeat:no-repeat">
        </div>
        <div>
          <u>Under Temporary Maintenance</u>
        </div>
        <div>
          Our website is temporarily closed until tomorrow (January 18th, 2024) for maintenance and testing.
        </div>
        <div>
          Want to see our classic version of the website? <a href="https://classic.bobcat.ws/index-2.html" target="_blank">Click here!</a>.
        </div>
      </div>
    </div>
  </body>
</html>
