$(".owl-carousel").owlCarousel({
    merge:true,
    loop:true,
    margin:10,
    video:true,
    lazyLoad:true,
    center:true
});
function videoslider(links){
  document.querySelector(".slider-s").src = links;
}
  