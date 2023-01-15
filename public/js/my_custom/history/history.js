console.log("The history page's JS is working");
$(() => {
  console.log("jQuery worked");
  $("[data-button]").click(()=>{
    let section = "[data-section=" + event.target.dataset.button + "]";
    let menuHeight = null;
    if (window.innerWidth <= 768) {
      menuHeight = $(".mainMenuTopBttn").outerHeight() + $(".timelineBox").outerHeight();
    } else {
      menuHeight = $(".mainMenuTopBttn").outerHeight();
    };
    let totalTop = $(section).offset().top - menuHeight;
    $("html,body").animate({
      scrollTop: totalTop
    }, 800);
  });

  const openNewVideo = (newBttnId,newVideoId) => {
    $(".oneForumVideo").css('display','none');
    for (let idNum = 1; idNum <= 5; idNum++) {
      let currentId = "#button" + idNum;
      if (currentId != newBttnId) {
        $(currentId).css('background-color','rgba(0,100,0,1)');
      };
    };
    $(newBttnId).css('background-color','rgba(139,0,0,1)');
    $(newVideoId).css('display','block');
  };

  $("#button1").click(()=>{
    openNewVideo("#button1","#video1");
  });

  $("#button2").click(()=>{
    openNewVideo("#button2","#video2");
  });

  $("#button3").click(()=>{
    openNewVideo("#button3","#video3");
  });

  $("#button4").click(()=>{
    openNewVideo("#button4","#video4");
  });

  $("#button5").click(()=>{
    openNewVideo("#button5","#video5");
  });

  const changeAAR = (buttonName) => {
    $("[data-opname]").css('display','none');
    let selectedAAR = "[data-opname="+buttonName+"]";
    $(selectedAAR).css('display','block');
    return true;
  }

  $("[data-opbutton]").click(()=>{
    changeAAR(event.target.dataset.opbutton);
  });

  changeAAR("clean_sweep");

  // Used this to change the tags in the original source code to avoid some of the repetiion
  // let originalText = ``;
  //
  // let newText = ``;
  //
  // const removeFromOld = (element) => {
  //   newText = originalText.split(element).join('');
  //   originalText = newText;
  // };
  //
  // const replaceOnOld = (oldElement,newElement) => {
  //   newText = originalText.replace(oldElement,newElement);
  //   originalText = newText;
  // };
  //
  // removeFromOld('<br>&nbsp;&nbsp;&nbsp;&nbsp;');
  // removeFromOld('<span class="style2">');
  // replaceOnOld(/<\/span><span class="style3">/gi,'</p><p><span>');
  // removeFromOld('<br>&nbsp;&nbsp;&nbsp;');
  // removeFromOld('<br> &nbsp;&nbsp;&nbsp;');
  // removeFromOld('<p> &nbsp;&nbsp;&nbsp;</p>');
  // removeFromOld('&nbsp;&nbsp;&nbsp;');
  //
  // console.log(newText);

});
