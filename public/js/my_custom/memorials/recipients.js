console.log("The memorial page's JS is working...");
$(() => {
  console.log("...and the jQuery works too.");
  // Moves user down to bio of selected casualty
  let initGetString = location.search.substring(1);
  let initGetArray = initGetString.split("&");
  for (let initNum = 0; initNum < initGetArray.length; initNum++) {
    let currentGetKey = initGetArray[initNum].split("=")[0];
    if (currentGetKey == "selected") {
      let windowTop = $(window).scrollTop();
      let resultTop = $("#rightSearchColumn").offset().top;
      let menuHeight = Math.trunc($('.mainMenuTopBttn').outerHeight(true));
      let heightDifference = resultTop - windowTop - menuHeight;
      $("html,body").animate({scrollTop:heightDifference},1000);
    };
  };

  $(".submitInput").click(()=>{
    $(".casualtyListRow").hide();
    let firstNameValue = $(".firstNameInput").val().toLowerCase();
    let lastNameValue = $(".lastNameInput").val().toLowerCase();
    let unitValue = $(".unitInput").val().toLowerCase();
    let conflictValue = $(".conflictInput").val().toLowerCase();

    const inputSearch = () => {
      let allAttributes = "";
      let allChildAttributes = "";
      let allParentAttributes = "";
      if (firstNameValue != "") {
        let firstString = "[data-first*='"+firstNameValue+"']";
        allAttributes+=firstString;
      };
      if (lastNameValue != "") {
        let lastString = "[data-last*='"+lastNameValue+"']";
        allAttributes+=lastString;
      };
      if (unitValue != "") {
        let unitString = "[data-unit*='"+unitValue+"']";
        allAttributes+=unitString;
      };
      if (conflictValue != "") {
        let childString = "[data-conflictid='" + conflictValue+"']";
        allChildAttributes = allAttributes + childString;
        let parentString = "[data-conflictparent='" + conflictValue+"']";
        allParentAttributes = allAttributes + parentString;
      };
      if (allAttributes == "" && allChildAttributes == "" && allParentAttributes == "") {
        $(".casualtyListRow").show();
      } else if (allChildAttributes != "") {
        $(".casualtyListRow").hide();
        $(allChildAttributes).show();
        $(allParentAttributes).show();
      } else {
        $(".casualtyListRow").hide();
        $(allAttributes).show();
      };
      let countShown = $(".casualtyListRow:visible").length;
      $(".casualtyTotal span").text(countShown);
    };
    inputSearch();
  });
});
