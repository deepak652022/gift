<?php
require('inc/essentials.php');
adminLogin();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Admin Panel - settings</title>
</head>
<body>
    
<?php require('inc/header.php');?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
           <h4 class="mb-4">SETTINGS</h4>
                <!-- Genral settting -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i>edit
                        </button>
                        </div>
                       
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                     
                    
                    </div>
                </div>

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="">

                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">General Settings</h5>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                            </div>

                             <div class="mb-3">
                            <label class="form-label">About</label>
                            <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" row="1"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about "  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn custum-bt text-white shadow-none">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>

<?php require('inc/scripts.php') ?>

<script>
let general_data;

function get_general(){
    let site_title = document.getElementById('site_title'); 
    let site_about = document.getElementById('site_about'); 

    let site_title_inp = document.getElementById('site_title_inp'); 
    let site_about_inp = document.getElementById('site_about_inp'); 


    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload  =  function(){
        general_data = JSON.parse(this.responseText);
        // console.log(general_data);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;
    }
   
    xhr.send('get_general');

}
window.onload = function(){
    get_general();
}
</script>    

</body>
</html>

