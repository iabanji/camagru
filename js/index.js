$('a.flipper').click(function(e){
  e.preventDefault();
  window.location.replace('/login')
  $('.flip').toggleClass('flipped');
});