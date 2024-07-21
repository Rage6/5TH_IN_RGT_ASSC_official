<!-- Welcome Styles -->
<!-- Default CSS files; 0px -> 360px-->
<link rel="stylesheet" type="text/css" href="/css/my_custom/registration/360_registration.css">
<!-- 361px -> 375px-->
<link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/registration/375_registration.css">
<!-- 376px -> 414px-->
<link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/registration/414_registration.css">
<!-- 415px -> 768px-->
<link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/registration/768_registration.css">
<!-- 769px -> 1366px-->
<link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/registration/1366_registration.css">
<!-- 1367px -> 1920px-->
<link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/registration/1920_registration.css">
<!-- 1921px and Greater -->
<link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/registration/past_1920_registration.css">
<script>
  function openAndCloseForm() {
    let currentDisplay = document.getElementById("regForm").style.display;
    console.log(currentDisplay);
    let currentWidth = window.outerWidth;
    if (currentDisplay == 'none') {
      document.getElementById("regForm").style.display = "block";
    } else {
      document.getElementById("regForm").style.display = "none";
    };
  };

  function showsProcessing() {
    let listOfRequired = [
      'first_name',
      'last_name',
      'address_line_1',
      'city',
      'state',
      'zip_code',
      'email'
    ];
    let validPost = true;
    for (let i = 0; i < listOfRequired.length; i++) {
      let input = document.getElementsByName(listOfRequired[i]);
      if (input[0]['value'] == null || input[0]['value'] == "") {
        console.log(listOfRequired[i]);
        validPost = false;
      };
    };
    if (validPost == true) {
      let submitBttn = document.querySelector(".submitBttn button");
      submitBttn.style.display = "none";
      let disabledSubmitBttn = document.getElementsByClassName('disabledSubmitBttn')[0];
      disabledSubmitBttn.style.display = "block";
    };
  };
</script>
@include ('footer.style')
