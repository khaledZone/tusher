 //Masonry

jQuery(document).ready(function($){

var $container = $('#masonry').imagesLoaded( function() {
//var $container = $('.masonry');
$container.imagesLoaded(function(){
$container.masonry({
  // options
  //columnWidth: '.grid-sizer',
  itemSelector: '.grid-item',
  percentPosition: true,
  //columnWidth: 200
});});});

});