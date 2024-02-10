<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fffHotel Booking Site</title>

   <?php require('include/links.php');?>
   <style>
   .box{
    border-top-color: var(--teal) !important;
   }
   </style>
   


</head>
<body class="bg-light"> 
    
<?php require ('include/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h1-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"> </div>
        <p class="text-center mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut minus animi blanditiis possimus amet dicta esse, nemo deserunt quisquam distinctio!</p>   
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem ipsum dolor sit</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus asperiores iure, autem excepturi ipsum nihil iusto.</p>
        </div>
        <div class="col-lg-5 cold-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about/about.jpg" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/hotel.svg" width="70px">
                 <h4 class="mt-3" >100+ ROOMS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/customers.svg" width="70px">
                 <h4 class="mt-3" >200+ CUSTOMERS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rating.svg" width="70px">
                 <h4 class="mt-3" >100+ REVIEWS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/staff.svg" width="70px">
                 <h4 class="mt-3" >100+ STAFFS</h4>
            </div>
        </div>

    </div>
</div>

<h3 class="my-5 fw-bold h1-font text-center"> MANAGEMENT TEAM</h3>
<?php require ('include/footer.php');?>





</body>
</html>