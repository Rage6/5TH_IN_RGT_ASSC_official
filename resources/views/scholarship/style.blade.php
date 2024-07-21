<!-- Welcome Styles -->
<!-- Default CSS files; 0px -> 360px-->
<link rel="stylesheet" type="text/css" href="/css/my_custom/scholarship/360_scholarship.css">
<!-- 361px -> 375px-->
<link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/scholarship/375_scholarship.css">
<!-- 376px -> 414px-->
<link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/scholarship/414_scholarship.css">
<!-- 415px -> 768px-->
<link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/scholarship/768_scholarship.css">
<!-- 769px -> 1366px-->
<link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/scholarship/1366_scholarship.css">
<!-- 1367px -> 1920px-->
<link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/scholarship/1920_scholarship.css">
<!-- 1921px and Greater -->
<link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/scholarship/past_1920_scholarship.css">
<script>
  function slideDown() {
    var menuHeight = document.getElementById("menuBar").offsetHeight;
    var scrollDown = window.outerHeight - menuHeight;
    window.scrollTo({
      top: scrollDown,
      left: 0,
      behavior: "smooth"
    });
  };
</script>
@include ('footer.style')
