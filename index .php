<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUGHAL HOTEL-HOME</title>

    <?php require('include/link.php');?>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

  
   
</head>
<style>

.avaliability-form{
   margin-top: -50px;
   z-index: 2;
   position: relative;
}
@media screen and (max-width:579px) {
  .avaliability-form{
   margin-top:25px;
   padding:0 35px;
  
}
}
</style>
<body class="bg-light">

<?php require('include/header.php'); ?>



<!-- images -->
 <div class="container-fluid px-lg-4 mt-4" >
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/img 5.jpeg"class="w-100 h-100 d-block " />
      </div>
      <div class="swiper-slide">
        <img src="img/img 2.jpeg"class="w-100 h-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="img/img 3.jpeg" class="w-100 h-100  d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="img/im 8.jpg"class="w-100 h-100  d-block" />
      </div>
      <div class="swiper-slide">
        <img src="img/im 9.jpg"class="w-100 h-100  d-block" />
      </div>
      <div class="swiper-slide">
        <img src="img/img 7.jpeg"class="w-100 h-100  d-block" />
      </div>
     
    </div>
    
   
  </div>
  </div>



</body>


<!-- check availibility form -->

<div class="container avaliability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Avaliability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label  class="form-label" style="font-weight:500;">Check-in</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3  mb-3">
          <label  class="form-label" style="font-weight:500;">Check-out</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3  mb-3">
          <label  class="form-label" style="font-weight:500;">Adult</label>
          <select class="form-select shadow-none" >
                <option selected>Open this select menu</option>
                 <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
          </div>

          <div class="col-lg-2  mb-3">
          <label  class="form-label" style="font-weight:500;">Children</label>
          <select class="form-select shadow-none" >
                <option selected>Open this select menu</option>
                 <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
          </div>
          <div class="col-lg-1  mt-2 mb-lg-3">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
 
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="room/img.webp" class="card-img-top">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₹200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features </h6>
            <span class="badge bg-light rounded-pill text-dark text-wrap  ">
             2 Rooms
            </span>

            <span class="badge bg-light rounded-pill text-dark text-wrap  ">
              1 Bathroom
             </span>

             <span class="badge bg-light rounded-pill text-dark text-wrap  ">
              1 balcony
             </span>
             <span class="badge bg-light rounded-pill text-dark text-wrap  ">
              3 Sofa
             </span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities </h6>
            <span class="badge bg-light rounded-pill text-dark text-wrap  ">
              Wifi
             </span>
 
             <span class="badge bg-light rounded-pill text-dark text-wrap  ">
               Television
              </span>
 
              <span class="badge bg-light rounded-pill text-dark text-wrap  ">
               Ac
              </span>
              <span class="badge bg-light rounded-pill text-dark text-wrap  ">
               Room heater
              </span>
              </div>
              <div class="guest mb-4">
                <h6 class="mb-1">Guest </h6>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  5 Adults
                 </span>
     
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   4 Children
                  </span>
              </div>
    
          

          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
           
          </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
         </div>
        </div>
      </div>
      </div>
      
      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="room/img.webp" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features </h6>
              <span class="badge bg-light rounded-pill text-dark text-wrap  ">
               2 Rooms
              </span>
  
              <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                1 Bathroom
               </span>
  
               <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                1 balcony
               </span>
               <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                3 Sofa
               </span>
            </div>
  
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities </h6>
              <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                Wifi
               </span>
   
               <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                 Television
                </span>
   
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                 Ac
                </span>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                 Room heater
                </span>
                </div>
                <div class="guest mb-4">
                <h6 class="mb-1">Guest </h6>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  5 Adults
                 </span>
     
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   4 Children
                  </span>
              </div>
    
           
  
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                 <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
           <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
           </div>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="room/img.webp" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features </h6>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                 2 Rooms
                </span>
    
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  1 Bathroom
                 </span>
    
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  1 balcony
                 </span>
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  3 Sofa
                 </span>
              </div>
    
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities </h6>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  Wifi
                 </span>
     
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   Television
                  </span>
     
                  <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   Ac
                  </span>
                  <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   Room heater
                  </span>
              </div>

              <div class="guest mb-4">
                <h6 class="mb-1">Guest </h6>
                <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                  5 Adults
                 </span>
     
                 <span class="badge bg-light rounded-pill text-dark text-wrap  ">
                   4 Children
                  </span>
              </div>
    
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                   <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
               
              </div>
             <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
             </div>
            </div>
          </div>
          </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
        <img src="features/wifi.png" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
        <img src="features/wifi.png" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>  <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
        <img src="features/wifi.png" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>  <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
        <img src="features/wifi.png" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>  <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
        <img src="features/wifi.png" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container">
    <div class="swiper Swiper-testimonial">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
         <div class="profile align-items-center d-flex p-4">
           <img src="features/stars.png" width="30px">
           <h6 class="m-0 ms-2">Random user1</h6>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ut ipsa repellendus ducimus id deserunt a nulla non? Porro, laudantium?</p>
         <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
         </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile align-items-center d-flex p-4">
            <img src="features/stars.png" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ut ipsa repellendus ducimus id deserunt a nulla non? Porro, laudantium?</p>
          <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>
         <div class="swiper-slide bg-white p-4">
          <div class="profile align-items-center d-flex p-4">
            <img src="features/stars.png" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ut ipsa repellendus ducimus id deserunt a nulla non? Porro, laudantium?</p>
          <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>
      </div>
      
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
  </div>
  

<!-- reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded"  height="320px" src="https://www.google.com/maps/d/embed?mid=1PdXSyjjbalDBQ2IKJDLhTgnq_9E&hl=en_US&ehbc=2E312F"  ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +923335425071" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-forward-fill"></i>  +923335425071
          </a>
          <br>
          <a href="tel: +923335108482" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-forward-fill"></i>  +923335108482
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 bg-light p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 bg-light p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 bg-light p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br>
         
        </div>
    </div>
  </div>
</div>


<?php require('include/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay:{
         delay:3500,
         disableOnInteraction: false,
      }
    
    });

   
    var swiper = new Swiper(".Swiper-testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
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

</html>