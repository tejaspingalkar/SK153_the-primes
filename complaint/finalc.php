<?php 
session_start();


    echo '<script language="javascript">';
    echo 'alert("Thank You!");';
    echo 'window.location.href="../user/";';
    echo '</script>';
    session_destroy();

?>