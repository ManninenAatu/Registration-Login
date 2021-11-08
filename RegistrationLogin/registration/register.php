<?php
    include('server.php');
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ot6 </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css"> 
</head>
    <body>
    

    <div class="container">

    <h3>Rekistöröidy</h3>

    <form class="form-signin" method="POST" action="register.php">
            <h3 style="text-align: center;">Rekistöröidy</h3>

            <input class="form-control" type="text" name="tunnus" placeholder="Käyttäjätunnus" value=<?php echo $tunnus?>>
           
            <input class="form-control" type="password" name="salasana" placeholder="Salasana">

            <input class="form-control" type="password" name="VahvistaSalasana" placeholder="Vahvista salasana">
            

            <input class="btn btn-primary btn-block" type="submit" name="nappula" value="Kirjaudu Sisään">


        </form>

 

    </div>

    </body>


</html>





