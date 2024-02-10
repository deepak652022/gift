<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cccHotel Booking Site</title>

    <?php require('include/links.php');?>
    <style></style>
  </head>
  <body class="bg-light">
    <?php require ('include/header.php');?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h1-font text-center">CONTACT US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut minus animi
        blanditiis possimus amet dicta esse, nemo deserunt quisquam distinctio!
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe
              class="w-100 rounded mb-4"
              height="250"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.036726603049!2d77.19019787428947!3d28.538615788341595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1df4cfd839c1%3A0x993aaa4122edb3f7!2sNIE%20Guest%20House%2C%20NCERT%20Campus%2C%20New%20Delhi!5e0!3m2!1sen!2sin!4v1699637207080!5m2!1sen!2sin"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>

            <h5>Address</h5>

            <a
              href="https://maps.app.goo.gl/YbgLc4cSL9WbmJuc9"
              target="_blank"
              class="d-inline-block text-decoration-none text-dark"
            >
              <i class="bi bi-geo-alt"></i> NIE Guest House, NCERT Campus, New
              Delhi
            </a>

            <h5 class="mt-4">Call Us</h5>
            <a
              href="tel: +918825744498"
              class="text-dark d-inline-block mb-2 text-decoration-none"
            >
              <i class="bi bi-telephone-fill"></i>918825744498</a
            ><br />
            <a
              href="tel: +918825744498"
              class="text-dark d-inline-block text-decoration-none"
            >
              <i class="bi bi-telephone-fill"></i>918825744498</a
            >

            <h5 class="mt-4">Email</h5>
            <a
              href="mailto:nie@gmail.com"
              class="text-dark d-inline-block text-decoration-none"
            >
              <i class="bi bi-envelope"></i> nie@gmail.com
            </a>

            <h5 class="mt-4">Follow Us</h5>
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
              <!-- <span class="badge bg-light text-dark fs-6 p-2"> -->
              <i class="bi bi-twitter me-1"></i>
              <!-- Twitter -->
              <!-- </span> -->
            </a>
           
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
              <!-- <span class="badge bg-light text-dark fs-6 p-2"> -->
              <i class="bi bi-facebook me-1"></i>
              <!-- Facebook -->
              <!-- </span> -->
            </a>
          
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
              <!-- <span class="badge bg-light text-dark fs-6 p-2"> -->
              <i class="bi bi-instagram me-1"></i>
              <!-- Instagram -->
              <!-- </span> -->
            </a>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 px-4">
          <div
            class="bg-white rounded shadow p-4">
            <form>
                <h5>Send a message</h5>
                <div class="mt-3">
                 <label class="form-label" style="font-weight: 500;">Name</label>
                <input type="text" class="form-control shadow-none" >
                    </div>
                <div class="mt-3">
                 <label class="form-label" style="font-weight: 500;">Email</label>
                <input type="email" class="form-control shadow-none" >
                    </div>
                <div class="mt-3">
                 <label class="form-label" style="font-weight: 500;">Subject</label>
                <input type="text" class="form-control shadow-none" >
                    </div>
                <div class="mt-3">
                 <label class="form-label" style="font-weight: 500;">Message</label>
                <textarea class="form-control shadow-none"  rows="0" style="resize: none;"></textarea>
                    </div>

                    <button type="submit" class="mt-3 text-white custum-bt btn  shadow-none">Send</button>
                    
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php require ('include/footer.php');?>
  </body>
</html>
