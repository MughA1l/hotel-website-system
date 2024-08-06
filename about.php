<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUGHAL HOTEL About</HOTEL-FACILITIES></title>

    <?php require('include/link.php');?>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
  .boxes{
    border-top-color:#279e8c !important;
  }
</style>

   
</head>

<body class="bg-light">

<?php require('include/header.php'); ?>

<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">ABOUT US</h2>
<div class="h-Line bg-dark"></div>
<p class="text-center mt-3">
  Lorem ipsum dolor sit amet consectetur adipisicing elit.
  Voluptas debitis odio non <br>numquam fugit dolorem dolor 
  veniam magnam ducimus qui.
</p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Cumque nam blanditiis magni, repellat quasi soluta dicta!
         Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Cumque nam blanditiis magni, repellat quasi soluta dicta!
         Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Cumque nam blanditiis magni, repellat quasi soluta dicta!
        </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2order-1">
      <img src="features/about.jpg"  class="w-100">
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center boxes">
      <img src="features/hotel.jpeg" width="70px">
      <h5 class="mt-3">100+ ROOMS</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center boxes">
      <img src="features/customar.webp" width="70px">
      <h5 class="mt-3">200+ CUSTOMERS</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center boxes">
      <img src="features/rating.png" width="70px">
      <h5 class="mt-3">150+ Reviews</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center boxes">
      <img src="features/staffs.jpeg" width="70px">
      <h5 class="mt-3">200+ STAFFS</h5>
      </div>
    </div>
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
   <!-- Swiper -->
  <div class="swiper myabout">
    <div class="swiper-wrapper mb-5 ">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
        <img src="features/im1.jpeg" width="w-100">
        <h5 class="mt-2">RANDAM NAME </h5>
      </div>
     
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>
<?php require('include/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
 var swiper = new Swiper(".myabout", {
    slidesPerView:4,
    spaceBetween:40,
    
    pagination: {
    el: ".swiper-pagination",
    },
    breakpoints: {
        .320:{
          slidesPerView:"1",
        },
        630:{
          slidesPerView:"1",
        },

        768: {
          slidesPerView:"1",
        },
        1024: {
          slidesPerView:"3",
        }
      }

  });
</script>
</body>
</html>