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
@include ('footer.style')
