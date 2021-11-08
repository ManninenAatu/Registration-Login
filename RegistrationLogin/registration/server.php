<?php

session_start();



$tunnus="";
$salasna="";
$virheet=array();

//rekistöröiminen
$yhteys = mysqli_connect('localhost','root','','oppimistehtava');

if (isset($_POST['nappula'])) {
    
    $tunnus = mysqli_real_escape_string($yhteys, $_POST['tunnus']);
    $salasana = mysqli_real_escape_string($yhteys, $_POST['salasana']);
    $VahvistaSalasana = mysqli_real_escape_string($yhteys, $_POST['VahvistaSalasana']);
  
    
    if (empty($tunnus)) { array_push($virheet, "Tunnus tarvitaan"); }
    if (empty($salasana)) { array_push($virheet, "Salasana tarvitaan"); }
    if ($salasana!= $VahvistaSalasana) {
      array_push($virheet, "Salasanat eivät täsmää");
    }


    $kayttaja_ONKO_JO = "SELECT * FROM kayttajat WHERE tunnus='$tunnus' LIMIT 1";
    $tulos = mysqli_query($yhteys, $kayttaja_ONKO_JO);
    $kayttaja = mysqli_fetch_assoc($tulos);
    
    //virheiden katsominen

    if ($kayttaja) { // if user exists
      if ($kayttaja['tunnus'] === $tunnus) {
        array_push($errors, "Username already exists");
      }
  
    }

    if (count($virheet) == 0) {
        $salattuSalasana = md5($salasana);//encrypt the password before saving in the database
  
        $lisaa = "INSERT INTO kayttajat (tunnus, salasana) 
                  VALUES('$tunnus', '$salattuSalasana')";
        mysqli_query($yhteys, $lisaa);
        $_SESSION['tunnus'] = $tunnus;
        $_SESSION['success'] = "You are now logged in";
        header("location:index.php");
    }
  }
  

  if (isset($_POST['nappi'])) {
    $tunnus = mysqli_real_escape_string($yhteys, $_POST['tunnus']);
    $salasana = mysqli_real_escape_string($yhteys, $_POST['salasana']);
  
    if (empty($tunnus)) {
        array_push($virheet, "Tunnus tarvitaan");
    }
    if (empty($salasana)) {
        array_push($virheet, "Salasana tarvitaan");
    }
  
    if (count($virheet) == 0) {
        $salasana = md5($salasana);
        $query = "SELECT * FROM kayttajat WHERE tunnus='$tunnus' AND salasana='$salasana'";
        $tulos = mysqli_query($yhteys, $query);
        if (mysqli_num_rows($tulos) == 1) {
          $_SESSION['tunnus'] = $tunnus;
          $_SESSION['success'] = "Olet nyt kirjattu siään!";
          header('location: index.php');
        }else {
            array_push($virheet, "Väärä tunnus tai salasana");
        }
    }
  }


?>