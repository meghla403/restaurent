<?php
    if(isset($_POST['TABLE_ID']) && isset($_POST['MGR_ID']) && isset($_POST['TABLE_CAPACITY'])):
    $tableid = $_POST['TABLE_ID'];
    $mgrid = $_POST['MGR_ID'];
    $tablecapacity = $_POST['TABLE_CAPACITY'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('<span style="font-family: Arial Black;">connection error: '.$link->connect_error.'</span>');

    $sql3 = "INSERT INTO TABLE_BOOKING(table_id,mgr_id,table_capacity) VALUES('".$tableid."', '".$mgrid."','".$tablecapacity."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo '<span style="font-family: Arial Black;">Successfully Inserted into TABLE_BOOKING table.</span>';
    else:
        echo '<span style="font-family: Arial Black;">Unable to post</span>';
    endif;

    $link->close();
    die();
    endif; 
?>
