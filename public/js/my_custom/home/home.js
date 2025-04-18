$(document).ready(() => {
  console.log("This is a test of the home.js file");

  // $(".categoryBox").css('display','none');

  // Shows the selected
  /* const showCategorySearch = (category) => {
    $(".categoryBox").css('display','none');
    let thisCategory = null;
    if (event == undefined) {
      thisCategory = 'year';
    } else {
      thisCategory = event.target.dataset.category;
    };
    $("[data-category]").css('color','black').css('background-color','white');
    if (thisCategory == 'first') {
      $("#firstBox").css('display','flex');
      $("[data-category=first]").css('color','white').css('background-color','black');
    } else if (thisCategory == 'last') {
      $("#lastBox").css('display','flex');
      $("[data-category=last]").css('color','white').css('background-color','black');
    } else {
      $("#yearBox").css('display','flex');
      $("[data-category=year]").css('color','white').css('background-color','black');
    };
  };

  showCategorySearch('year');

  $("[data-category='first']").click(()=>{
    showCategorySearch('first');
  });

  $("[data-category='last']").click(()=>{
    showCategorySearch('first');
  });

  $("[data-category='year']").click(()=>{
    showCategorySearch('first');
  });

  // Search by first or last names. Only shows EXACT matches (not case-sensitive)
  const findByName = (inputName,category) => {
    $("[data-first]").css('display','none');
    let searchValue = $(inputName).val().toLowerCase();
    if (searchValue != "") {
      $("[data-" + category + "='" + searchValue + "']").css('display','flex');
    } else {
      $("[data-first]").css('display','flex');
    };
  };

  $("#searchFirstBttn").click(()=>{
    findByName("#searchByFirst","first");
  });

  $("#searchLastBttn").click(()=>{
    findByName("#searchByLast","last");
  });

  // Shows a list of any Bobcats that were in the 5th during the entered year
  const findByYear = (inputYear) => {
    $("[data-first]").css('display','none');
    let searchYear = $(inputYear).val();
    if (searchYear != "") {
      intSearchYear = parseInt(searchYear);
      let idArray = $("[data-start]").map(function() {
          return $(this).data("parent");
        }).get();
      let startArray = $("[data-start]").map(function() {
          return $(this).data("start");
        }).get();
      let endArray = $("[data-end]").map(function() {
          return $(this).data("end");
        }).get();
      for (let spanNum = 0; spanNum < idArray.length; spanNum++) {
        if (startArray[spanNum] <= intSearchYear && endArray[spanNum] >= intSearchYear) {
          $("[data-user='" + idArray[spanNum] + "']").css('display','flex');
        };
      };
    } else {
      $("[data-first]").css('display','flex');
    };
  };

  $("#searchYearBttn").click(()=>{
    findByYear("#searchByYear");
  });

  // Shows or hides a selected element by clicking
  const showGenericBox = (boxElement,displayType) => {
    if ($(boxElement).css('display') == 'none') {
      $(boxElement).css('display',displayType);
    } else {
      $(boxElement).css('display','none');
    };
  };

  // Shows the tips for using the search tool
  $("#troublesBttn").click(() => {
    showGenericBox("#troublesBox","block");
  }); */

  // Swaps the Bobcat's current and veteran images
  let mainImg = $("#primaryImg").css('background-image');
  let cornerImg = $("#secondaryImg").css('background-image');
  if (mainImg != undefined) {
    mainImg = mainImg.replace('url("','').replace('")','');
    cornerImg = cornerImg.replace('url("','').replace('")','');
  };
  const swapImages = () => {
    $("#primaryImg").css('background-image','url("' + cornerImg + '")');
    $("#secondaryImg").css('background-image','url("' + mainImg + '")');
    mainImg = $("#primaryImg").css('background-image');
    mainImg = mainImg.replace('url("','').replace('")','');
    cornerImg = $("#secondaryImg").css('background-image');
    cornerImg = cornerImg.replace('url("','').replace('")','');
  };

  $("#secondaryImg").click(()=>{
    swapImages();
  });

  // Choose between Bobcat search by names or years
  var selectedButton = "[data-searchinput='name']";
  $("[data-searchbutton]").click((event) => {
    selectedButton = "[data-searchbutton='" + event.target.dataset.searchbutton + "']";
    selectedInput = "[data-searchinput='" + event.target.dataset.searchbutton + "']";
    var hiddenButton = "[data-searchbutton='name']";
    var hiddenInput = "[data-searchinput='name']";
    if (event.target.dataset.searchbutton == "name") {
      hiddenButton = "[data-searchbutton='year']";
      hiddenInput = "[data-searchinput='year']";
    };
    $(selectedButton).css('color','rgb(139,0,0)').css('text-decoration','underline');
    $(selectedInput).css('display','block');
    $(hiddenButton).css('color','black').css('text-decoration','none');
    $(hiddenInput).css('display','none');
    var trueHiddenInput = hiddenInput + " > input";
    $(trueHiddenInput).val('');
  });
  
  // Open and close a "deletion" element
  $('[data-deletebttn]').click(function() {
    var value = event.target.dataset.deletebttn;
    var status = $("[data-deleteel='"+value+"']").css('display');
    if (status == 'block') {
      $("[data-deleteel='"+value+"']").css('display','none');
    } else {
      $("[data-deleteel='"+value+"']").css('display','block');
    };
  });

});
