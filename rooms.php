<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUGHAL HOTEL ROOMS</HOTEL-FACILITIES></title>

    <?php require('include/link.php');?>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


   
   
</head>

<body class="bg-light">

<?php require('include/header.php'); ?>

<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
<div class="h-Line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
<div class="col-lg-3 col-md-12">
 <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
   <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filtersDropdowns" aria-controls="#filterDropdowns" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filtersDropdowns">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size:18px;">CHECK AVAILIBILITY</h5>

        <label  class="form-label" >Check-in</label>
        <input type="date" class="form-control shadow-none mb-3">

        <label  class="form-label" >Check-out</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
        <div class="mb-2">
        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
        <label  class="form-label" for="f1" >Facility One</label>
        </div>
        <div class="mb-2">
        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
        <label  class="form-label" for="f2" >Facility Two</label>
        </div>
        <div class="mb-2">
        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
        <label  class="form-label" for="f3" >Facility Three</label>
        </div>

      </div>

      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
        <div class="d-flex">
 <div class="me-3">
        <label  class="form-label" >Adults</label>
        <input type="number" class="form-control shadow-none ">
        </div>
        <div>
        <label  class="form-label" >Children</label>
        <input type="number" class="form-control shadow-none ">
        </div>
   </div>

      </div>
    </div>
  </div>
</nav>
 </div>

<div class="col-lg-9 col-md-12">
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="room/img.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room name</h5>
      <div class="features mb-3">
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
    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm text-white w-100 custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>

    </div>
    
  </div>
</div>
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="room/img.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room name</h5>
      <div class="features mb-3">
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
    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm text-white w-100 custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>

    </div>
    
  </div>
</div>
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="room/img.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room name</h5>
      <div class="features mb-3">
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
    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm text-white w-100 custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>

    </div>
    
  </div>
</div>
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="room/img.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room name</h5>
      <div class="features mb-3">
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
    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm text-white w-100 custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>

    </div>
    
  </div>
</div>
</div>

</div>
</div>

<?php require('include/footer.php'); ?>
</html>