<!DOCTYPE html>
<html>

<head lang="en">
   <title> Web Tutor </title>
   <link rel="stylesheet" href="style.css">
 </head>

<body >
  <div>
      <div>
			   
         <br>
         <h1 Align="center" class="tit" style="margin-left:190px;letter-spacing:3px;">The WebTutor</h1>
		  </div>
      <br>
      <br>
      <br>
      <center>
     <div class="dib">

        <h2 class="tit">The WebTutor
        </h2>
                    <h2 style="text-align:center;" class="tit">Web Tutor</h2>

                    <div class="para">
                    <p>Web Tutor is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.</p>

          <p>Web Tutor has focus on simplicity, practicing easy and straight-forward learning.We use simple code explanations, and illustrate how to use it.The tutorials start from basic level, and move all the way up to complete professional references.
          <ul>
            <li>Precise content and excellent description</li>
            <li>Examples and snippet codes Available</li>
            <li>Search option covering all topics</li>
          <br><p><b>ALL THE BEST</b>
          </div>
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

        <center>
        <div>

          <form action="CheckUserLogin.php" method="POST" class="par">
  				<table valign="center" border="0"   cellpadding="4" cellspacing="4">
  					<tr><td><b>User Name</b></td><td><input type="text" name="uname" value=<?php echo Cookie_val(1)?>></td></tr>
  					<tr><td><b>Password</b></td><td><input type="password" name="pwd" value=<?php echo Cookie_val(2)?>></td></tr>
            <tr><td><input type="checkbox" name="remuser">Remember Password</td></tr>
  					<tr><td></td><td><input type="submit" value=" Sign in ">&nbsp;&nbsp;&nbsp;<a href="NewUser.html">New User Sign up</a></td></tr>
  				</table>

  				</form>
</div><center>
</div><center>
</div>
</body>
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{
			if (isset($_COOKIE['UName']))
			{
				return $_COOKIE['UName'];
			}
			else
				return;
		}
		else
		{
			if (isset($_COOKIE['Pwd']))
			{
				return $_COOKIE['Pwd'];
			}
			else
				return;
		}
		}
	?>

</html>
