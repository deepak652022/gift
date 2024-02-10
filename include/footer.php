<!-- footer -->

<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h1-font fw-bold fs-3 mb-2">NIE Guest House</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos magnam modi obcaecati!</p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Contact Us</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
                 <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>
                    Twitter
                </span>
                </a><br>
                 <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook me-1"></i>
                    Facebook
                </span>
                </a><br>
                 <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram me-1"></i>
                    Instagram
                </span>
                </a>
        </div>
    </div>

</div>

<h6 class="text-center bg-dark text-white p-3 m-0"> Developed by CIET, Hosted by NIC</h6>

<!-- cdn link for bootstrap 5 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- cdn script for swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
      delay: 1000,
      disableOnInteraction: false
      }
    });
  </script>


 <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
            slidesPerView:  1, 
        },
        640: {
            slidesPerView: 1, 
        },
        768: {
            slidesPerView: 3, 
        },
        1024: {
            slidesPerView: 3, 
        },

      }
    });
    </script>