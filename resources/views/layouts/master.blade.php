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
    @include('menu.style')

    @include('footer.style')

    <link rel="icon" href="/{{ config('app.url_ext') }}images/welcome/5INF_crest-min.png">

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @include('menu.script')
    <script src=<?php echo($js) ?>></script>
  </head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-K2MS5EG7YX"></script>
  <!-- <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K2MS5EG7YX');
  </script> -->
  <body>

    @include('menu.content')
    <pre style="display:none">
      @php
        $data = memory_get_usage();
        $peak = memory_get_peak_usage();
        $how_much_left = ($peak - $data) / 1000;
      @endphp
      <!-- gc_collect_cycles() is an option -->
      Empty memory remaining: {{ $how_much_left }} kB
    </pre>
    @yield($content)

  </body>
</html>
