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
  mainImg = mainImg.replace('url("','').replace('")','');
  let cornerImg = $("#secondaryImg").css('background-image');
  cornerImg = cornerImg.replace('url("','').replace('")','');
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

});
