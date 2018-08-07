<?php
  session_start();
   $con = mysqli_connect('localhost', 'root', '','db_srm_library') or die("Error connecting to database: ".mysqli_error());
   mysqli_select_db($con,'db_srm_library') or die(mysqli_error($con));
    $query = $_GET['search'];
    $type="html";
    $min_length = 3;


    if(strlen($query) >= $min_length){

        $query = htmlspecialchars($query);


        $query = mysqli_real_escape_string($con,$query);


        $raw_results = mysqli_query($con,"SELECT * FROM book
            WHERE ((`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')) and type='$type'") or die(mysqli_error($con));

        if(mysqli_num_rows($raw_results) > 0){
            while($results = mysqli_fetch_array($raw_results))
            {
                ?>
                <!-- <!DOCTYPE html>
                <html>
                <head lang="en">
                   <title> LIBMAN </title>
                   <link rel="stylesheet" href="style.css">
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                 </head>
                <body class="container">
                  <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="home.php"><img src="h-book-colors.gif" height="35px" width="35px"></a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                      <li class="nav-item active"><a class="nav-link" href="fiction.php">Fiction</a></li>
                      <li class="nav-item"><a class="nav-link" href="nfiction.php">Non-Fiction</a></li>
                      <li class="nav-item"><a class="nav-link" href="cscience.php">Computer Science</a></li>
                      <li class="nav-item"><a class="nav-link" href="home.php"><?php// echo $_SESSION['Sname']; ?></a></li>
                      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                  </div>
                </nav>
                <div class="dib par">
                					<br>
                					<h2 style="text-align:center;" class="tit">Fiction</h2>
                                    <p>A work of fiction is an act of creative imagination, so its total faithfulness to the real-world is not typically assumed by its audience. Therefore, fiction is not commonly expected to present only characters who are actual people or descriptions that are factually accurate. Instead, the context of fiction, not adhering precisely to the real world, is generally understood as being more open to interpretation. Characters and events within a fictional work may even be set in their own context entirely separate from the known universe: an independent fictional universe. Fiction is regarded as the traditional opposite of non-fiction, whose creators assume responsibility for presenting only the historical and factual truth; however, the distinction between fiction and non-fiction can be unclear, for example, in postmodern literature.</p>
                        <br>
                        <br>
                        <form style="color:black" action="searchf.php" method="GET">
                    		<input type="text" name="search">
                    		<input class="btn" style="background-color:yellow;" type="submit" value="Search">
                    		</form>
                      </div>
                </body>
                </html> -->
                <?php

              echo "<p><h3>".$results['title']."</h3>".$results['author']."<br>"."<p>".$results['descr']."</p></p>";

            }

        }
        else{
            echo "No results";
        }

    }
    else{
        echo "Minimum length is ".$min_length;
    }
?>
