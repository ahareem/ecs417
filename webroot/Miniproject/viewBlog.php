<!DOCTYPE html>
<html>
    <head>
        <title>BLOG POSTS</title>
    </head>
        <body>
            <?php
    
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

                        echo "<div>";   
							echo "<p>".$date."</p>";
             				echo "<p>".$title."</p>";
             				echo "<p>".$entry."</p>";
						echo "</div>";
                    }
                }
                else
                {
                    echo("There are no posts to display!");
                }

            ?>
        </body>
</html>
