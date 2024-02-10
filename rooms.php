<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cccHotel Booking Site</title>

    <?php require ('include/links.php');?>
    <style></style>
  </head>
  <body class="bg-light">
    <?php require ('include/header.php');?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h1-font text-center">Our Rooms</h2>
      <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <nav class="navbar navbar-expand-lg bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2" style="font-size: 20px;">FILTER</h4>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVALABINITY</h5>
                
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
                
              </div>

              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
                
              </div>
      
            </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <?php require ('include/footer.php');?>
  </body>
</html>
