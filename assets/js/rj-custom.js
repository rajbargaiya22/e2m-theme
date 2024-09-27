$( document ).ready(function() {

  var element = $('.rj-main-head'); 
  var text = $.trim(element.first().text()); 
  var words = text.split(/\s+/); 
  
  if (words.length >= 3) {
      words[2] = '<span>' + words[2] + '</span>';
      var newText = words.join(' ');
  
      element.first().html(newText); 
  }
  

  $('.rj-partner-carousel').owlCarousel({
    loop:true,
    margin:20,
    items:6,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
  })
});