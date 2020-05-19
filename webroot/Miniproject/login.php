<?php

	session_start();
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
		$myemail = mysqli_real_escape_string($conn, $_POST['email']);
      	$mypassword = mysqli_real_escape_string($conn, $_POST['psw']); 
      
        $sql = "select * from USERS where email = '$myemail' AND password = '$mypassword'"; // CHECK FOR THE RECORD FROM TABLE * selects all fields

        $result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);
		
        if($count == 1)
        {
			$_SESSION['status'] = true;
            $_SESSION['user'] = $myemail;
            header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/addPost.html");
			exit();
        }
        else
        {
            header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/login.html");
			exit();
        }
    }
	else 
		{
			echo"<script> alert("Invalid credentials!") </script>";
			header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/login.html");
      	}

?>
