$(document).ready(function(){
/******************************************************/
  var headrHeight = $('.header').height();
  var toto = 20;
  $('.marginTop').css("margin-top", headrHeight + toto + "px");

/******************************************************/
  $('.tabs').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });

/******************************************************/
//   $('ul.tabs2 li').click(function(){
// 		var tab_id = $(this).attr('data-tab');
//
// 		$('ul.tabs2 li').removeClass('btnActive');
// 		$(".tab-content2").removeClass('current');
//
// 		$(this).addClass('btnActive');
// 		$("#"+tab_id).addClass('current');
// 	})
// /******************************************************/
  // $('.sidebarSection-3 li').click(function(){
  //   var tugg_id = $(this).attr('tuggle');
  //
  //   $('.sidebarSection-3 li').removeClass('tuggle_active');
  //
  //   $(this).addClass('tuggle_active');
  //   $("#"+tugg_id).addClass('tuggle_active');
  // })
/******************************************************/
$('.bitch').click(function(){
  if ($(".btmOfHeader").is(":hidden")) {
      $(".btmOfHeader").slideDown("slow");
      $('.bitch').addClass('tuggle_active');
      // $("i",this).toggleClass("icon-expand_less icon-expand_more");
  } else {
      $(".btmOfHeader").slideUp("slow");
      $('.bitch').removeClass('tuggle_active');
      // $("i",this).toggleClass("icon-expand_more icon-expand_less");
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
