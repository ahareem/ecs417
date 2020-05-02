<?php
    session_start();
    include("config.php");

    if(isset($_SESSION['status']) && ($_SESSION['status'] == true)) 
    {
        session_destroy();
        header("location: miniproject.html"); 
    }
    else
    {
        header("location: viewBlog.php"); 
    }
?>