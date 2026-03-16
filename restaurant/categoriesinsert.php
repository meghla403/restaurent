<?php
    if(isset($_POST['CATEGORIES_ID']) && isset($_POST['CATEGORIES_DESC'])):
    $categoriesid = $_POST['CATEGORIES_ID'];
    $categoriesdesc = $_POST['CATEGORIES_DESC'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO CATEGORIES(categories_id, categories_desc) VALUES('".$categoriesid."', '".$categoriesdesc."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into CATEGORIES table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>

