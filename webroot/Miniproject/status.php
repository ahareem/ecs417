<?php

    session_start();
    include("config.php");
    if(isset($_SESSION['user']) && ($_SESSION['status'] == true)) 
    {
        header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/addPost.html");
        exit();
    }
    else
    {
        header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/login.html");
        exit();
    }
?>
