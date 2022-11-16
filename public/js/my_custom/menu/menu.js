$(document).ready(() => {
  // console.log("Testing");

  $('#mainMenuTopBttn').click(()=>{

    let windowWidth = window.outerWidth + "px";
    let topBttnHeight = $('.mainMenuTopBttn').outerHeight(true);
    let pixelRatio = window.devicePixelRatio;
    if (window.outerWidth <= 1920) {
      if ($(".mainMenuBox").css('display') == 'none') {
        $(".mainMenuBox").css('display','block');
        $('.mainMenuBox').css('left',windowWidth);
      };
      let isHidden = true;
      if ($('.mainMenuBox').css('left') == "0px") {
        isHidden = false;
      };
      if (isHidden == false) {
        if (window.outerWidth <= 768) {
          $('.mainMenuBox').css('animation-name','scrollMenuAllHide').css('top',topBttnHeight);
        } else if (window.outerWidth > 768 && window.outerWidth <= 1366) {
          $('.mainMenuBox').css('animation-name','scrollMenuHalfHide').css('top',topBttnHeight);
        } else {
          $('.mainMenuBox').css('animation-name','scrollMenuThirdHide').css('top',topBttnHeight);
        };
        $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,0.8),rgba(0,100,0,0.8) 85%,rgba(0,0,0,1))');
      } else {
        if (window.outerWidth <= 768) {
          $('.mainMenuBox').css('animation-name','scrollMenuAllShow').css('top',topBttnHeight);
        } else if (window.outerWidth > 768 && window.outerWidth <= 1366) {
          $('.mainMenuBox').css('animation-name','scrollMenuHalfShow').css('top',topBttnHeight);
        } else if (window.outerWidth > 1366 && window.outerWidth <= 1920) {
          $('.mainMenuBox').css('animation-name','scrollMenuThirdShow').css('top',topBttnHeight);
        };
        $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,1),rgba(0,100,0,1) 85%,rgba(0,0,0,1))');
      };
    } else {
      let newLeft = (window.outerWidth / 2) + 320;
      let newTop = $('.mainMenuTopBttn').outerHeight(true);
      $('.mainMenuBox').css('animation-name','');
      if ($('.mainMenuBox').css('display') == 'block') {
        $('.mainMenuBox').css('display','none').css('left',newLeft).css('top',newTop);
      } else {
        $('.mainMenuBox').css('display','block').css('left',newLeft).css('top',newTop);
      };
    };
  });

  $('[data-bttn-num]').click(()=>{
    let bttnNum = event.target.dataset.bttnNum;
    let currentDisplay = $('[data-box-num="' + bttnNum + '"]').css('display');
    $('[data-box-num]').css('display','none');
    if (currentDisplay == 'none') {
      $('[data-box-num="' + bttnNum + '"]').css('display','block');
    } else {
      $('[data-box-num="' + bttnNum + '"]').css('display','none');
    };
  });

});
