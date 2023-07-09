$(document).ready(() => {
  console.log("This is a test of the admin.js file 2");

  // Open or close option to add a member
  // $(".addMemberBttn").click(()=>{
  //   if ($(".addMemberInfo").css('display') == 'block') {
  //     $(".addMemberInfo").css('display','none');
  //   } else {
  //     $(".addMemberInfo").css('display','block');
  //   };
  // });

  // Open or close a member's information
  $("[data-memberbttn]").click(()=>{
    let memberId = event.target.dataset.memberbttn;
    if ($("[data-memberbox='" + memberId + "']").css('display') == 'none') {
      $("[data-memberbox='" + memberId + "']").css('display','block');
    } else {
      $("[data-memberbox='" + memberId + "']").css('display','none');
    };
  });

  // Open or close the option to add a new time span
  $("[data-addbttn]").click(()=>{
    let addId = event.target.dataset.addbttn;
    if ($("[data-addbox='" + addId + "']").css('display') == 'none') {
      $("[data-addbox='" + addId + "']").css('display','block');
    } else {
      $("[data-addbox='" + addId + "']").css('display','none');
    };
  });

  // Opens the option for member deletion
  $("[data-delbttn]").click(()=>{
    let delId = event.target.dataset.delbttn;
    if ($("[data-delbox='" + delId + "']").css('display') == 'none') {
      $("[data-delbox='" + delId + "']").css('display','block');
    };
  });

  // Closes the option for member deletion
  $("[data-cancelbttn]").click(()=>{
    let cancelId = event.target.dataset.cancelbttn;
    if ($("[data-delbox='" + cancelId + "']").css('display') == 'block') {
      $("[data-delbox='" + cancelId + "']").css('display','none');
    };
  });

  // Open and close 'add' boxes
  const addBttnTool = (bttnType) => {
    // console.log("The function worked");
    if ($("[data-addbox='"+bttnType+"']").css('display') == 'block') {
      // console.log($("[data-addbox='"+bttnType+"']").css('display'));
      $("[data-addbox='"+bttnType+"']").css('display','none');
      // console.log($("[data-addbox='"+bttnType+"']").css('display'));
    } else {
      // console.log($("[data-addbox='"+bttnType+"']").css('display'));
      $("[data-addbox='"+bttnType+"']").css('display','block');
    };
  };

  $("[data-addbttn='member']").click(()=>{
    // console.log("The member click worked");
    addBttnTool('member');
  });

  $("[data-addbttn='recipient']").click(()=>{
    // console.log("The recipient click worked");
    addBttnTool('recipient');
  });

  $("[data-addbttn='casualty']").click(()=>{
    // console.log("The casualty click worked");
    addBttnTool('casualty');
  });

  $("[data-addbttn='conflict']").click(()=>{
    // console.log("The conflict click worked");
    addBttnTool('conflict');
  });

  // Open or close a casualty's information
  $("[data-casualtybttn]").click(()=>{
    let casualtyId = event.target.dataset.casualtybttn;
    if ($("[data-casualtybox='" + casualtyId + "']").css('display') == 'none') {
      $("[data-casualtybox='" + casualtyId + "']").css('display','block');
    } else {
      $("[data-casualtybox='" + casualtyId + "']").css('display','none');
    };
  });

  // Opens the option for casualty deletion
  $("[data-delcasbttn]").click(()=>{
    // console.log("This happened");
    let delCasId = event.target.dataset.delcasbttn;
    // console.log(event.target.dataset.delcasbttn);
    if ($("[data-delcasbox='" + delCasId + "']").css('display') == 'none') {
      $("[data-delcasbox='" + delCasId + "']").css('display','block');
    };
  });

  // Closes the option for casualty deletion
  $("[data-cancelcasbttn]").click(()=>{
    let cancelId = event.target.dataset.cancelcasbttn;
    if ($("[data-delcasbox='" + cancelId + "']").css('display') == 'block') {
      $("[data-delcasbox='" + cancelId + "']").css('display','none');
    };
  });

  // Create link slots when adding a new casualty or recipient
  const addLinkForNew = (linkTypePlural,linkTypeSingular,linkTypeShort) => {
    $("[data-linkbttn='" + linkTypePlural + "'][data-new='true']").click(()=>{
      // let thisLinkList = "." + linkTypeShort + "LinkIdList";
      let thisLinkList = "[data-listtype='"+linkTypeShort+"'][data-listuse='new']";
      let currentList = $(thisLinkList).val();
      let newIdNum;
      let newIdNumString;
      if (currentList != '') {
        currentArray = currentList.split(',');
        let highestNum = 0;
        for (let listNum = 0; listNum < currentArray.length; listNum++) {
          let thisNum = parseInt(currentArray[listNum]);
          if (highestNum < thisNum) {
            highestNum = thisNum;
          };
        };
        newIdNum = highestNum + 1;
        newIdNumString = newIdNum.toString();
      } else {
        newIdNum = "1";
      };
      if (currentList == '') {
        currentList = newIdNum;
      } else {
        currentList = currentList.concat(",",newIdNumString);
      };
      $(thisLinkList).val(currentList);
      // $(".linkBox").append("\
      $("[data-editlinktype='"+linkTypePlural+"'][data-editlinkuse='new']").append("\
        <div data-linkboxtype='"+linkTypeSingular+"' data-linkboxnum='" + newIdNum + "'>\
          <input type='text' name='" + linkTypeShort + "_link_name_"+newIdNum+"' placeholder='Link Name' required />\
          <input type='text' name='" + linkTypeSingular + "_link_"+newIdNum+"' placeholder='Link URL' required />\
          <div data-deletetype='" + linkTypeSingular + "' data-deletenum='" + newIdNum + "' class='btn btn-danger'>X</div>\
        </div>");
      $('[data-deletetype][data-deletenum]').off('click');
      $('[data-deletetype][data-deletenum]').on('click',()=>{
        let deleteType = event.target.dataset.deletetype;
        let deleteNum = event.target.dataset.deletenum;
        // Removes the element
        $("[data-linkboxtype='" + deleteType + "'][data-linkboxnum='" + deleteNum + "']").remove();
        // Takes it off of the .linkIdList
        let removedFromList = $(thisLinkList).val();
        let cleanedArray = [];
        let cleanedList = "";
        let removedFromArray = removedFromList.split(',');
        for (let removalListNum = 0; removalListNum < removedFromArray.length; removalListNum++) {
          if (removedFromArray[removalListNum] != deleteNum) {
            cleanedArray.push(removedFromArray[removalListNum]);
            cleanedList = cleanedArray.join();
          };
        };
        $(thisLinkList).val(cleanedList);
      });
    });
  };

  addLinkForNew("casualties","casualty","cas");
  addLinkForNew("recipients","recipient","moh");

  // Create link slots for an existing casualty or recipient
  const addLinkForExisting = (linkTypePlural,linkTypeSingular,linkTypeShort) => {
    $("[data-bttntype='" + linkTypePlural + "'][data-new='false'][data-boxid]").click(()=>{
      let thisClickId = event.target.dataset.boxid;
      let currentList = $("[data-linklist='"+linkTypePlural+"'][data-linklistid='"+thisClickId+"']").val();
      // console.log(currentList);
      let newIdNum;
      let newIdNumString;
      if (currentList != "") {
        currentArray = currentList.split(',');
        let highestNum = 0;
        for (let listNum = 0; listNum < currentArray.length; listNum++) {
          let thisNum = parseInt(currentArray[listNum]);
          if (highestNum < thisNum) {
            highestNum = thisNum;
          };
        };
        newIdNum = highestNum + 1;
        newIdNumString = newIdNum.toString();
      } else {
        newIdNum = 1;
        newIdNumString = "1";
      };
      if (currentList == '') {
        currentList = newIdNumString;
      } else {
        currentList = currentList.concat(",",newIdNumString);
      };
      $("[data-linklist='"+linkTypePlural+"'][data-linklistid='"+thisClickId+"']").val(currentList);
      // $(".linkBox").append("\
      $("[data-editlinktype='"+linkTypePlural+"'][data-editlinkuse='existing'][data-editlinkboxid='"+thisClickId+"']").append("\
        <div data-linkboxnum='" + newIdNum + "' data-linkboxtype='" + linkTypePlural + "' data-linkboxid='"+ thisClickId + "' class='card'>\
          <input name='" + linkTypeShort + "_link_name_"+newIdNum+"' placeholder='Link Name' value='' required />\
          <input name='" + linkTypeShort + "_link_url_"+newIdNum+"' placeholder='Link URL' value='' required />\
          <div data-linkdeletenum='" + newIdNum + "' data-linkdeletetype='" + linkTypePlural + "' data-linkdeleteid='" + thisClickId + "' class='btn btn-danger'>X</div>\
        </div>");
      $('[data-linkdeletenum][data-linkdeletetype][data-linkdeleteid]').off('click');
      $('[data-linkdeletenum][data-linkdeletetype][data-linkdeleteid]').on('click',()=>{
        let deleteType = event.target.dataset.linkdeletetype;
        let deleteNum = event.target.dataset.linkdeletenum;
        let deleteId = event.target.dataset.linkdeleteid;
        // Removes the element
        $("[data-linkboxnum='" + deleteNum + "'][data-linkboxtype='" + deleteType + "'][data-linkboxid='" + thisClickId + "']").remove();
        // Takes it off of the .linkIdList
        let thisLinkList = "[data-linklist='"+linkTypePlural+"'][data-linklistid='"+thisClickId+"']";
        let removedFromList = $(thisLinkList).val();
        // console.log($(thisLinkList).val());
        let cleanedArray = [];
        let cleanedList = "";
        let removedFromArray = removedFromList.split(',');
        for (let removalListNum = 0; removalListNum < removedFromArray.length; removalListNum++) {
          if (removedFromArray[removalListNum] != deleteNum) {
            cleanedArray.push(removedFromArray[removalListNum]);
            cleanedList = cleanedArray.join();
          };
        };
        $(thisLinkList).val(cleanedList);
      });
    });
  };

  addLinkForExisting("casualties","casualty","cas");
  addLinkForExisting("recipients","recipient","moh");

  // Delete a link slot for a casualty or recipient
  const deleteCurrentLink = (linkType) => {
    $("[data-linkdeletenum][data-linkdeletetype][data-linkdeleteid]").click(()=>{
      let linkNum = event.target.dataset.linkdeletenum;
      let linkType = event.target.dataset.linkdeletetype;
      let linkId = event.target.dataset.linkdeleteid;
      $("[data-linkboxnum='"+linkNum+"'][data-linkboxtype='"+linkType+"'][data-linkboxid='"+linkId+"']").remove();
      let currentList = $("[data-linklist='"+linkType+"'][data-linklistid='"+linkId+"']").val();
      let currentArray = currentList.split(',');
      let newList = "";
      for (let checkNum = 0; checkNum < currentArray.length; checkNum++) {
        if (currentArray[checkNum] != linkNum) {
          if (newList == "") {
            newList = currentArray[checkNum];
          } else {
            newList = newList + "," + currentArray[checkNum];
          };
        };
      };
      $("[data-linklist='"+linkType+"']").val(newList);
    });
  };

  deleteCurrentLink("moh");
  deleteCurrentLink("casualties");

  // Open or close a MOH recipient's information
  $("[data-recipientbttn]").click(()=>{
    let recipientId = event.target.dataset.recipientbttn;
    if ($("[data-recipientbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-recipientbox='" + recipientId + "']").css('display','block');
    } else {
      $("[data-recipientbox='" + recipientId + "']").css('display','none');
    };
  });

  // Opens the option for recipient deletion
  $("[data-delrecipientbttn]").click(()=>{
    console.log("This happened");
    let delRecipientId = event.target.dataset.delrecipientbttn;
    console.log(event.target.dataset.delcasbttn);
    if ($("[data-delrecipientbox='" + delRecipientId + "']").css('display') == 'none') {
      $("[data-delrecipientbox='" + delRecipientId + "']").css('display','block');
    };
  });

  // Closes the option for recipient deletion
  $("[data-cancelrecipientbttn]").click(()=>{
    let cancelRecipientId = event.target.dataset.cancelrecipientbttn;
    if ($("[data-delrecipientbox='" + cancelRecipientId + "']").css('display') == 'block') {
      $("[data-delrecipientbox='" + cancelRecipientId + "']").css('display','none');
    };
  });

  // Open or close connecting members to CMOH recipients
  // $("[data-gotcmohbttn]").click(()=>{
  //   let recipientId = event.target.dataset.gotcmohbttn;
  //   if ($("[data-gotcmohbox='" + recipientId + "']").css('display') == 'none') {
  //     $("[data-gotcmohbox='" + recipientId + "']").css('display','block');
  //   } else {
  //     $("[data-gotcmohbox='" + recipientId + "']").css('display','none');
  //   };
  // });

  // Open or close connecting members to recipients
  $("[data-gotcmohbttn]").click(()=>{
    let recipientId = event.target.dataset.gotcmohbttn;
    console.log(recipientId);
    console.log($("[data-gotcmohbox='" + recipientId + "']").css('display'));
    if ($("[data-gotcmohbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-gotcmohbox='" + recipientId + "']").css('display','block');
      console.log("block");
    } else {
      $("[data-gotcmohbox='" + recipientId + "']").css('display','none');
      console.log("none");
    };
  });

  // Open or close connecting members to casualties
  $("[data-gotkilledbttn]").click(()=>{
    let casualtyId = event.target.dataset.gotkilledbttn;
    console.log(casualtyId);
    console.log($("[data-gotkilledbox='" + casualtyId + "']").css('display'));
    if ($("[data-gotkilledbox='" + casualtyId + "']").css('display') == 'none') {
      $("[data-gotkilledbox='" + casualtyId + "']").css('display','block');
      console.log("block");
    } else {
      $("[data-gotkilledbox='" + casualtyId + "']").css('display','none');
      console.log("none");
    };
  });

  // Open or close connecting casualty to a CMOH recipient
  $("[data-gotmedalbttn]").click(()=>{
    let medalId = event.target.dataset.gotmedalbttn;
    if ($("[data-gotmedalbox='" + medalId + "']").css('display') == 'none') {
      $("[data-gotmedalbox='" + medalId + "']").css('display','block');
    } else {
      $("[data-gotmedalbox='" + medalId + "']").css('display','none');
    };
  });

  // Open or close box for changing conflict
  $("[data-conflictbttn]").click(()=>{
    let conflictId = event.target.dataset.conflictbttn;
    if ($("[data-conflictbox='" + conflictId + "']").css('display') == 'none') {
      $("[data-conflictbox='" + conflictId + "']").css('display','block');
    } else {
      $("[data-conflictbox='" + conflictId + "']").css('display','none');
    };
  });

  // Open or close box to add war/conflict to member's record
  $("[data-addwarbttn]").click(()=>{
    let addWarId = event.target.dataset.addwarbttn;
    if ($("[data-addwarbox='" + addWarId + "']").css('display') == 'none') {
      $("[data-addwarbox='" + addWarId + "']").css('display','block');
    } else {
      $("[data-addwarbox='" + addWarId + "']").css('display','none');
    };
  });

  // AFTER STARTING OFFICIAL WEBSITE

  // var clearDateTimeInput = function(level,phase) {
  //   $("input[data-level=" + level + "][data-phase=" + phase + "]").val(null);
  // };

  $("span[data-level][data-phase]").click(()=>{
    var level = event.target.dataset.level; // 'level' is date or time
    var phase = event.target.dataset.phase; // 'phase' is start or end
    $("input[data-level=" + level + "][data-phase=" + phase + "]").val(null);
  });

  // Open and close the application details
  $('[data-id][data-type="head"]').click(()=>{
    var head = $("[data-id='" + event.target.dataset.id + "'][data-type='head']");
    var details = $("[data-id='" + event.target.dataset.id + "'][data-type='details']");
    if ($(details).css('display') == 'none') {
      $("[data-id][data-type='details']").css('display','none');
      $(details).css('display','block');
    } else {
      $(details).css('display','none');
    };
  });

});
