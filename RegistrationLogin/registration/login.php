<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kirjaudu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/login.css"> 
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form class="form-signin" method="POST" action="login.php">
  	<?php include('errors.php'); ?>
  
      <input class="form-control" type="text" name="tunnus" placeholder="Käyttäjätunnus">
           
           <input class="form-control" type="password" name="salasana" placeholder="Salasana">

           <input class="btn btn-primary btn-block" type="submit" name="nappi" value="Kirjaudu Sisään">


           <p>Ei käyttäjää vielä? Rekistöröidy <a href="register.php">Rekistöröidy</a>
  	</p>

  </form>
</body>
</html>