$(document).ready(function(){
/******************************************************/
  $(window).scroll(function() {
    if ($(this).scrollTop() > 150){
      $('header').addClass("sticky");
    }
    else{
      $('header').removeClass("sticky");
    }
  });
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
  $('.sidebarSection-3 li').click(function(){
    var tugg_id = $(this).attr('tuggle');

    $('.sidebarSection-3 li').removeClass('tuggle_active');

    $(this).addClass('tuggle_active');
    $("#"+tugg_id).addClass('tuggle_active');
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
