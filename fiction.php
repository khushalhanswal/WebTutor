<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head lang="en">
   <title> Tutor </title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
<body class="container">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php" style="letter-spacing:2px;font-family: "Lato", sans-serif;color:white;">The Web Tutor</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
      <li class="nav-item active"><a class="nav-link" href="fiction.php">HTML</a></li>
      <li class="nav-item"><a class="nav-link" href="nfiction.php">Java script</a></li>
      <li class="nav-item"><a class="nav-link" href="cscience.php">Php</a></li>
      <li class="nav-item"><a class="nav-link" href="home.php"><?php echo $_SESSION['Sname']; ?></a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<div class="dib par">
					<br>
					<h2 style="text-align:center;" class="tit">HTML</h2>
                    <p>Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.[4] Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
        <br>
        <br>
        <form style="color:black" action="searchf.php" method="GET">
    		<input type="text" name="search">
    		<input class="btn" style="background-color:yellow;" type="submit" value="Search">
    		</form>
      </div>
</body>
</html>
