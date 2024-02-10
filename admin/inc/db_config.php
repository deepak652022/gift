<?php
$hname='localhost';
$uname='root';
$pass='';
$db='hbweb';

$con=mysqli_connect($hname,$uname,$pass,$db);

if(!$con)
{
    die('connect error'.mysqli_connect_error());
}

function filteration($data){
     foreach($data as $key=>$value){
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);

    }
    return $data;
}

function select($sql, $values,$datatypes){

    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("query cant be exexuted");
        }
    
    }
    else{
        die("query cannot be prepared - select");
    }
}

?>