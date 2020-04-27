<?php
    session_start();
    include("config.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $entry = mysqli_real_escape_string($conn, $_POST['entry']);

        $date = date('l jS \of F Y H:i e');

        $sql = "INSERT into ENTRIES (title, entry, date) VALUES ('$title', '$entry', '$date')";
    }

    mysqli_query($conn, $sql);
    header("Location: http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/viewBlog.php");
?>