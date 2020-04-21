<?php

    require_once("/opt/app-root/src/webroot/Miniproject/config.php");
    session_start();

    if(isset ($_POST['email']) && isset ($POST['psw'])) //isset checks if the vars have been filled 
    {

        $query = "select * from USERS where email = '".$_POST['email']."' AND password = '".$_POST['psw']."'"; // CHECK FOR THE RECORD FROM TABLE * selects all fields

        $result = mysqli_query($conn ,$query); //sends a query to the mysql database 


        //if no of rows =1 in table (which it will as it will only contain one row of info (mine))
        if(mysqli_fetch_assoc($result))
        {
            header("Location: /opt/app-root/src/webroot/Miniproject/addPost.html");
        }
        else
        {
            header("Location: /opt/app-root/src/webroot/Miniproject/index.html");
        }
    }

?>
