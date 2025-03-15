$(document).ready(() => {
    console.log("History/album js");

    // Shows and hides the album options
    $("[data-button]").click(function() {
        var button = event.target.dataset.button;
        if (button == "show") {
            $(".albumListBkgrd").css('display','flex');
        } else {
            $(".albumListBkgrd").css('display','none');
        };
    });
});