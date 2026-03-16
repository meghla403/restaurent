<?php
    if(isset($_POST['CHEF_NAME']) && isset($_POST['SPECIALITY']) && isset($_POST['CATEGORIES_ID']) && isset($_POST['TIME'])):
    $chefname= $_POST['CHEF_NAME'];
    $speciality = $_POST['SPECIALITY'];
    $categoriesid = $_POST['CATEGORIES_ID'];
    $time = $_POST['TIME'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO CHEF(chef_name,speciality,categories_id,time) VALUES('".$chefname."', '".$speciality."','".$categoriesid."','".$time."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into chef table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>