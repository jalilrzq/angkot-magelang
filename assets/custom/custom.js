var swiper = new Swiper(".mySwiperNew", {
  grabCursor: true,
  spaceBetween: 20,
  centeredSlides: false,
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});