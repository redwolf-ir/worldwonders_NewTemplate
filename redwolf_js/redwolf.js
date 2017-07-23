$(document).ready(function(){
/******************************************************/
  var headrHeight = $('.header').height();
  var toto = 20;
  $('.marginTop').css("margin-top", headrHeight + toto + "px");
  $('.marginTopReverse').css("margin-top", headrHeight + "px");

/******************************************************/
  $('.tabs').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });

/******************************************************/
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btnSoc");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
/******************************************************/
$('.btnCat').click(function(){
  if ($(".btmOfHeader").is(":hidden")) {
      $(".btmOfHeader").slideDown("slow");
      $('.btnCat').addClass('tuggle_active');
      $('.btnFav').removeClass('tuggle_active');
      $(".btmOfHeaderHot").slideUp("slow");
  } else {
      $(".btmOfHeader").slideUp("slow");
      $('.btnCat').removeClass('tuggle_active');
  }
})

$(window).click(function() {
  $(".btmOfHeader").slideUp("slow");
  $('.btnCat').removeClass('tuggle_active');
  $(".btmOfHeaderHot").slideUp("slow");
  $('.btnFav').removeClass('tuggle_active');
});

$('.btnCat').click(function(event){
    event.stopPropagation();
});
$('.btmOfHeader').click(function(event){
    event.stopPropagation();
});
$('.btmOfHeaderHot').click(function(event){
    event.stopPropagation();
});
$('.btnFav').click(function(event){
    event.stopPropagation();
});
/******************************************************/
$('.btnFav').click(function(){
  if ($(".btmOfHeaderHot").is(":hidden")) {
      $(".btmOfHeaderHot").slideDown("slow");
      $('.btnFav').addClass('tuggle_active');
      $(".btmOfHeader").slideUp("slow");
      $('.btnCat').removeClass('tuggle_active');
  } else {
      $(".btmOfHeaderHot").slideUp("slow");
      $('.btnFav').removeClass('tuggle_active');
  }
})
/******************************************************/
// $('.artTabBtnsNext').click(function(){
//   var artTab = $(".artTabContent").attr('artTabs');
//
//   $(".artTabContent").removeClass('currentArt');
//   $("#"+artTab).addClass('currentArt');
//   alert(artTab);
// })
/******************************************************/
});
