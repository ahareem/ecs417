<?php

    include("config.php");
    session_start();

    if(isset ($_POST['email']) && isset ($POST['psw'])) //isset checks if the vars have been filled 
    {

        $sql = "select * from USERS where email = '".$_POST['email']."' AND password = '".$_POST['psw']."'"; // CHECK FOR THE RECORD FROM TABLE * selects all fields

        $result = $conn->query($sql); //sends a query to the mysql database 

        if($result === TRUE)
        {
            header("Location: /opt/app-root/src/webroot/Miniproject/addPost.html");
			exit();
        }
        else
        {
            header("Location: /opt/app-root/src/webroot/Miniproject/index.html");
			exit();
        }
    }

?>
