$(document).ready(() => {
  // console.log("Testing");

  $('#bottomView').click(()=>{
    let marginHeight = $(".lowerBody").outerHeight(true) - $(".lowerBody").outerHeight();
    $("html,body").animate({scrollTop:marginHeight},800);
  });

});
