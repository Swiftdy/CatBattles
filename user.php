<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CatBattles</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="Cat, Battle, BattleCats">
    <meta name="description" content="CatFight">
    <meta name="Robots" content="index, nofollow">
</head>
<body>
    <!-- Startar Navbar -->
    <?php
		require "include/navbar.php"
	?>
    <!-- Slutar Navbar -->
    <div class="body">
	
	<!-- Kollar ifall uname existerar i länken och i så fall skickar error meddelandet -->
	<?php 

		if(isset($_GET['uname'])) {
			echo '<div class="error">
    Username or Password is incorrect
  </div>';
		}
		
		?>
  <!-- Start Form -->
  <form action="#">
	<h2>Login</h2>

    <div class="container">
      <label>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
  <!-- End Form -->
    </div>
	<!-- Start Footer -->
	<?php
		require "include/footer.php"
	?>
	<!-- End Footer -->
</body>
</html>