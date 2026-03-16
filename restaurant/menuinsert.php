<?php
    if(isset($_POST['ITEM_ID']) && isset($_POST['ITEM_NAME']) && isset($_POST['ITEM_RATE']) && isset($_POST['CATEGORIES_ID'])):
    $itemid = $_POST['ITEM_ID'];
    $itemname = $_POST['ITEM_NAME'];
    $itemrate = $_POST['ITEM_RATE'];
    $categoriesid = $_POST['CATEGORIES_ID'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO MENU(item_id,item_name,item_rate,categories_id) VALUES('".$itemid."', '".$itemname."','".$itemrate."','".$categoriesid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into MENU table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>
