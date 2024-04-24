
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="w-100" src="img/front.jpg" alt="Image" style="height: 900px;">
      </div>
      <div class="swiper-slide swiper-slide-vertical">
        <img class="w-100" src="img/11.jpeg" alt="Image" style="height: 900px;">
      </div>
      <div class="swiper-slide">
        <img class="w-100" src="img/cow-photo.jpg" alt="Image" style="height: 900px;">
      </div>
      <!-- Add more slides as needed -->
    </div>
 
    <div class="swiper-pagination"></div>
   
    <div class="swiper-button-next" style="color:white;"></div>
    <div class="swiper-button-prev" style="color:white;"></div>
  </div>
  
  <script>
    var mySwiper = new Swiper('.swiper-container', {
      direction: 'horizontal', // or 'vertical'
      loop: true, // Set to true if you want a continuous loop
      speed: 900, // Set the transition speed
      effect: 'cube', // Use the cube effect
      grabCursor: true, // Show a grab cursor while dragging
      cubeEffect: {
        shadow: true, // Enable shadow for the cube effect
        slideShadows: true, // Enable slide shadows for the cube effect
        shadowOffset: 20, // Set the shadow offset (adjust as needed)
        shadowScale: 0.94, // Set the shadow scale (adjust as needed)
      },
      autoplay: {
        delay: 2000, // Set the delay between slides in milliseconds (3 seconds in this example)
        disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with the swiper
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true, // Enable pagination clickable
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  
 
   
