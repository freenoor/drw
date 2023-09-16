$(document).ready(function () {
  jQuery(".add-open").click(function(){
      jQuery(this).toggleClass("active-footer"); 
  });
});


$(".listbtn a").click(function (e) {
  e.preventDefault(); // disable href on a

  $(".item").removeClass("active"); //  remove all actives
  const accordionItem = $(this).attr("data-type"); // this
  $("." + accordionItem).addClass("active");
});
$(document).on("click",".listbtn a",function(){
  if (!$(this).hasClass("active_accordion")) {
    $("li a").removeClass("active_accordion");
    $(this).addClass("active_accordion");
  }
});

jQuery("a[href='#anchor-direct']").click(function() {
jQuery("html, body").animate({ scrollTop: 20 }, "slow");
return false;
});

var swiper = new Swiper(".mySwiper1", {
slidesPerView: 4.5,
loop: true,
pagination: {
el: ".swiper-pagination",
clickable: true,
},
autoplay: {
    delay: 3000,
},
breakpoints: {
768: {
slidesPerView: 6,
},
1024: {
slidesPerView: 8, 
autoplay: false,  
},
},
});