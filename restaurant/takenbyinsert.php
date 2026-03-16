<?php
    if(isset($_POST['ORD_ID']) && isset($_POST['MGR_ID'])):
    $ordid = $_POST['ORD_ID'];
    $mgrid = $_POST['MGR_ID'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO TAKEN_BY(ord_id,mgr_id) VALUES('".$ordid."', '".$mgrid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into TAKEN_BY table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>