<?php
	session_start();

?>

<html>
<head>
<title>login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
	<body>

<!--- Navabr Start--->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Car Management System</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
          <a class="nav-link" href="admin_signup.php">Registration</a>
        </li>
      </ul>
    </div>
    </div>
</nav>


<!-- Login System-->
<?php
    
    include '../Controller/adminController.php';

     
    ?>

<!-- Login Code end-->




<form method="POST" action="../Controller/adminController.php">
        <fieldset>
        <legend style="color:cyan;"> <h1>Login</h1></legend>
			<table>
				

				<tr>
					<td align="right">Username</td>
					<td>:<input name="username"  type="text" placeholder="Your User Name" ><br>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="password"  type="password" placeholder="Password""><br>
				</tr>

			

				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
          <a href="admin_dashboard.php">Login</a>
				</tr>
			</table>
			<label>Forget Password? <a href="forgetpassword.php">Password Reset</a> </label>
            </fieldset>
		</form>
	</body>
</html>