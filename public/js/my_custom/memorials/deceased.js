console.log("The testing page's JS is working...");
$(() => {
  console.log("...and the jQuery works too.");
  // Moves user down to bio of selected casualty

  // Swaps the deceased's current and veteran images
  let mainImg = $("[data-image=main]").css('background-image');
  let thumbnailImg = $("[data-image=thumbnail]").css('background-image');
  const swapImages = () => {
    $("[data-image=main]").css('background-image',thumbnailImg);
    $("[data-image=thumbnail]").css('background-image',mainImg);
    mainImg = $("[data-image=main]").css('background-image');
    thumbnailImg = $("[data-image=thumbnail]").css('background-image');
  };

  $("[data-image=thumbnail]").click(()=>{
    swapImages();
  });

});
