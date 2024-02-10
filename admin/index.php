
<?php

require('inc/db_config.php');
require('inc/essentials.php');
 session_start();
        if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            redirect('dashboard.php');
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('inc/links.php') ?>
    <style>
div.login-form{
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    width:400px;
}   

</style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-none ">
     <form method="POST">
        <h4 class="text-center bg-dark text-white py-3">ADMIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                   
                    <input required name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="admin" >
                </div>
                <div class="mb-3">
                 
                    <input required name="admin_pass" type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn text-white custum-bt shadow-none text-center"  >login</button>
            </div>
    </form>
    </div>

<?php 
if(isset($_POST['login'])){
    $frm_data = filteration($_POST);
    $query = "select * from `admin_crud` where `admin_name`=? AND `admin_pass`=?";
    $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
    $datatypes = "ss"; 
    
    $res = select($query,$values,"ss"); 

    // print_r($res);
    // echo "<h1>$frm_data[admin_name]</h1>";
    // echo "<h1>$frm_data[admin_pass]</h1>";
    // print_r($_POST);
     if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        // session_start();
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        redirect('dashboard.php');
        
        // echo "got user";
     }
     else{

         alert("error", "failed");
     }
}
?>

</body>
</html>