<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <link rel = "stylesheet" href = "viewBlog.css" type = "text/css">
        <title>BLOG POSTS</title>
    </head>
		<a id="add" href="http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/status.php">Add Post </a>
        <a id= "logout" href="http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/logout.php">Logout</a>
        <br>
        <hr>
        <body class="container">
            <?php
    			
				session_start();
                include("config.php");
                $sql = "select * from ENTRIES ORDER BY ID DESC";

                $result =  mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $title = $row['title'];
                        $entry = $row['entry'];
                        $date = $row['date'];

                        echo "<article>"; 
						echo "<section>";
							echo '<p class = "date"><img id = "image" src="clock.png">'.$date.'</p>';
             				echo '<p class = "title">'.$title.'</p>';
             				echo '<p class= "entry">'.$entry.'</p><hr>';
						echo "</section>";
						echo "</article>";
                    }
                }
                else
                {
                    echo("There are no posts to display!");
                }

            ?>
        </body>
</html>
