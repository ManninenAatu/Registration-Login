<?php 
  session_start(); 

  if (!isset($_SESSION['tunnus'])) {
  	$_SESSION['msg'] = "Kirjaudu sisään ensin!";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css"> 
</head>
<body>

<div class="header">
	<h2>Testi</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['tunnus'])) : ?>
    	<p>Tervetuloa <strong><?php echo $_SESSION['tunnus']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>