var nameanimation = bodymovin.loadAnimation({
    container: document.getElementById('name'),
    render: 'svg',
    loop:false,
    autoplay: true,
    path: 'data.json'
    ,
});

$(document).ready(function(){
    $(".btn").append('<span></span><span></span>');
});



$(document).on("scroll", function(){
    if
  ($(document).scrollTop() > 86){
      $("#banner").addClass("shrink");
    }
    else
    {
        $("#banner").removeClass("shrink");
    }
});

particlesJS.load('particles-js', 'particles.json', function() {
    console.log('particles.js loaded - callback');
  });
// particlesJS.load('particles-js', 'assets/particles.json', function(){
//     console.log('callback - particles.js config loaded');
// });