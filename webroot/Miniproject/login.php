<?php

    include("config.php");
    session_start();

    if(isset ($_POST['email']) && isset ($POST['psw']))
    {
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $sql =  " SELECT * from USERS where email = '" .$email."' AND password = '".$pass."'"; // CHECK FOR THE RECORD FROM TABLE

        $result = $conn->query($sql); //sends a query to the mysql database 
        $count = mysqli_num_rows($result);

        //if no of rows =1 in table (which it will as it will only contain one row of info (mine))
        if($count == 1)
        {
            header("Location: addPost.html");
            exit();
        }
        else
        {
            header("Location: index.html");
            exit();
        }
    }

?>