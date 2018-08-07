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
        <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
      <li class="nav-item "><a class="nav-link" href="fiction.php">HTML</a></li>
      <li class="nav-item"><a class="nav-link" href="nfiction.php">Java script</a></li>
      <li class="nav-item"><a class="nav-link" href="cscience.php">Php</a></li>
      <li class="nav-item"><a class="nav-link" href="home.php"><?php echo $_SESSION['Sname']; ?></a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<div class="dib par">
					<h2 style="text-align:center;" class="tit">Web Tutor</h2>
                    <p>Web Tutor is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.</p>

					<p>Web Tutor has focus on simplicity, practicing easy and straight-forward learning.We use simple code explanations, and illustrate how to use it.The tutorials start from basic level, and move all the way up to complete professional references.
					<ul>
						<li>Precise content and excellent description</li>
						<li>Examples and snippet codes Available</li>
						<li>Search option covering all topics</li>
					<br><p><b>ALL THE BEST</b>
					
        </div>
        <br>
		<div class="dib par">Topics Covered
		<table style="border-color:white;" width="100%" cellspacing="4" cellpadding="4" border="1">
		<tbody>
			<tr>
				<td width="150">
					HTML</td>
				<td>
					Html tags and attributes</td>
			</tr>
			<tr>
				<td width="150">
					java Script </td>
				<td>
					Basic java script syntax</td>
			</tr>
			<tr>
				<td width="150">
					Php</td>
				<td>
					Php programming</td>
			</tr>
		</tbody>
	</table>
        </div>
</body>
</html>
