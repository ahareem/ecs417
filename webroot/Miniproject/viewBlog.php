<?php
		echo '<a id="add" href="http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/status.php">Add Post </a>';
        echo '<a id= "logout" href="http://cakephp-mysql-persistent-webtechshit.bde1.qmul-eecs.openshiftapps.com/Miniproject/logout.php">Logout</a><br><hr>';
        echo "<body class='container'>";
    			
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
			echo "</body>";
?>
