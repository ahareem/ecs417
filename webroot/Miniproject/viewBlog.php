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

                        <div>   
							<p> <?php echo $row['date'] ?> </p>
             				<p> <?php echo $row['title'] ?> </p>
             				<p> <?php echo $row['entry'] ?> </p>
						</div>
                    }
                }
                else
                {
                    echo("There are no posts to display!");
                }

            ?>
        </body>
</html>
