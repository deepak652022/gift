<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Site</title>

   <?php require('include/links.php');?>
   
    <style>
        

      /* booking avalaibilty relative */
        .availibilty-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 576px) {
        .availibilty-form {
          margin-top: 25px;
          padding: 0 15px;
        }
      }
    </style>


</head>
<body class="bg-light"> 
    
<?php require ('include/header.php');?>




<!-- Swiper Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper-container">
    <div class="swiper-wrapper">
        
        <div class="swiper-slide">
        <img src="images/carousel/(1).png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
        <img src="images/carousel/(2).png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
        <img src="images/carousel/(3).png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
        <img src="images/carousel/(4).png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
        <img src="images/carousel/(5).png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
        <img src="images/carousel/(6).png" class="w-100 d-block" />
        </div>
        
    </div>
    </div>
</div>


  <!-- check booking avalability -->

<div class="container availibilty-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">check avalability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                        </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custum-bt"> Submit </button>
                    </div>
            </div>
                </form>
        </div>
    </div>
</div>

<!-- our room -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h1-font">Our Rooms</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="..." >
                
                <div class="card-body">
                    <h5>Simple room name</h5>
                    <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 bathroom </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 balcony </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">AC </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custum-bt shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                </div>
            </div>

                
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="..." >
                
                <div class="card-body">
                    <h5>Simple room name</h5>
                    <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 bathroom </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 balcony </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">AC </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custum-bt shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                </div>
            </div>

                
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="..." >
                
                <div class="card-body">
                    <h5>Simple room name</h5>
                    <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 bathroom </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 balcony </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">AC </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custum-bt shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                </div>
            </div>

                
        </div>

                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" > More rooms>></a >
                </div>

    </div>
</div>

<!-- our facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h1-font">Our Facilities</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>

        <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" > More facilities>></a >
        </div>
    </div>
</div>


<!-- Our Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h1-font">Testimonials</h2>

<div class="container">
 <div class="swiper mySwiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_41622.svg" width="30px;">
            <h6 class="m-0 ms-2">Rondom user1</h6>
        </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit alias amet est!</p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>


      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_41622.svg" width="30px;">
            <h6 class="m-0 ms-2">Rondom user1</h6>
        </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit alias amet est!</p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      
      
       <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_41622.svg" width="30px;">
            <h6 class="m-0 ms-2">Rondom user1</h6>
        </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit alias amet est!</p>
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
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" > Know more>></a >
        </div>
</div>

<!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h1-font">REACH US</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded mb-4">
        </div>

        <div class="col-lg-4 col-md-4 ">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <!-- <a href="tel: +918825744498" class="text-dark d-inline-block mb-2 text-decoration-none">
                    <i class="bi bi-telephone-fill"></i>918825744498</a><br>
                <a href="tel: +918825744498" class="text-dark d-inline-block  text-decoration-none">
                    <i class="bi bi-telephone-fill"></i>918825744498</a> -->
            </div>

            <div class="bg-white p-4 rounded mb-4">
                <!-- <h5>Follow Us</h5>
                <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>
                    Twitter
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook me-1"></i>
                    Facebook
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram me-1"></i>
                    Instagram
                </span>
                </a> -->
                <br>
                
            </div>
        </div>




    </div>
</div>


<?php require('include/footer.php');?>





</body>
</html>