<?php

	session_start();
    include("config.php");

    if(isset ($_POST['email']) && isset ($POST['psw'])) //isset checks if the vars have been filled 
    {

        $sql = "select * from USERS where email = '".$_POST['email']."' AND password = '".$_POST['psw']."'"; // CHECK FOR THE RECORD FROM TABLE * selects all fields

        $result = $conn->query($sql); //sends a query to the mysql database 

        if($result -> num_rows > 0)
        {
            header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/addPost.html");
			exit();
        }
        else
        {
            header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/login.html");
			exit();
        }
    }

?>
