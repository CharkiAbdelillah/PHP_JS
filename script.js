// click navbar color
$(document).on('click','.header ul li',function(){
  $(this).addClass('active-home').siblings().removeClass('active-home')
})

// typing text animation script
var typed = new Typed(".typing-1", {
    strings: ["développement informatique", "technologie web", "Devops"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

// var typed = new Typed(".typing-2", {
//     strings: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
//     typeSpeed: 100,
//     backSpeed: 60,
//     loop: true
// });
// //gps
// // Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 31.792305849269, lng: -7.080168000000015 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
////
// toggle menu/navbar script
$(document).ready(function(){
  $(window).scroll(function(){

  // toggle menu/navbar script
  $('.menu-btn').click(function(){
    $('.navbar .menu').toggleClass("active");
    $('.menu-btn i').toggleClass("active");
});
});
});
  var scrollTop=$('.scroll-up-btn');
$(function(){  
$(window).scroll(function(){
      
      // scroll-up button show/hide script
      if($(window).scrollTop()>= 350){
          scrollTop.fadeIn(400);
          // console.log('you passed 1000px now');
      }else{
        scrollTop.fadeOut(400);
      }
      // toggle menu/navbar script
    $('.menu-btn').click(function(){
      $('.navbar .menu').toggleClass("active");
      $('.menu-btn i').toggleClass("active");
  });
  });
  // console.log('hhhhhhhhhhh');
  });
