<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into  tbl_theatre values(NULL,'$name','$address','$place','$region','$zipcode')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into  tbl_login values(NULL,'$id','$username','$password','1')");
    header('location:add_theatre_2.php?id='.$id);
?>