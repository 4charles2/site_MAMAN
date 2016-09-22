$(function (){ 
  $('.carousel').carousel();
  $('blockquote a').tooltip(); 
  $('.btn-group .btn:nth-child(1)').click(function () {
    $('iframe').attr('src', 'http://www.youtube.com/embed/VmnIeLmjuHA');
  })
  $('.btn-group .btn:nth-child(2)').click(function () {
    $('iframe').attr('src', 'http://www.youtube.com/embed/fRAG4T-iqqY');
  })
  $('.btn-group .btn:nth-child(3)').click(function () {
     $('iframe').attr('src', 'http://www.youtube.com/embed/yua4jzecCIE');
  })
});
    