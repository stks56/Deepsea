"use strict"
$(function() {
// オープニングモーダル
  $('#opening-1').fadeIn(2000);
  $('#opening-2').delay(2500).fadeIn(2000);
  $('.opening').delay(5500).fadeOut(2000);

// モーダル
  $('.send').click(function(){
    $('#send-modal').show();
  });
  $('.name-change').click(function(){
    $('#name-change-modal').show();
  });
  $('.about').click(function(){
    $('#about-modal').show();
  });

  $('.close-modal').click(function(){
    $('.modal').hide();
  });



});
