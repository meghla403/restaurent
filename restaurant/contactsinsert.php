<?php
    if(isset($_POST['MGR_ID']) && isset($_POST['PHONE_NUM'])):
    $mgrid = $_POST['MGR_ID'];
    $phonenum = $_POST['PHONE_NUM'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO CONTACTS(mgr_id,phone_num) VALUES('".$mgrid."', '".$phonenum."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into contacts table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>