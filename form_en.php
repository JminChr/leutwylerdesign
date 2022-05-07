<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact - JC Accounting & Solutions</title>
  <meta name="keywords" content="Contact, accounting, bookkeeping, trust, tax return, websites, Luzern">
  <meta charset="utf-8">
  <link rel="icon" href="icon-16px.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link href="style.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/36aad65054.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

<body>
  <header class="flex-container">
    <a class="nav-de" href="https://www.jcas.ch">DE</a><a class="nav-en" href="index_en.html">EN</a>
    <div class="logo">
      <img alt="JC Accounting & Solutions" src="logo2.png" />
    </div>
    <div class="menu-resp">
      <a class="nav-link" href="#" id="navbarDropwdown" role="button" data-toggle="dropdown"><i
          class="fas fa-bars fa-2x"></i></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="index_en.html">Home</a>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Services</a>
        <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="buchhaltung_en.html">Accounting</a>
          <a class="dropdown-item" href="steuern_en.html">Taxes</a>
          <a class="dropdown-item" href="beratung_en.html">Consulting</a>
          <a class="dropdown-item" href="software_en.html">Software</a>
        </div>
        <a class="nav-link" href="ueberuns_en.html">About me</a>
        <a class="nav-link" href="kontakt_en.html">Contact</a>
        <a class="nav-link" href="news_en.html">News</a>

      </div>
    </div>
    <nav class="nav nav-resp" id="nav-resp">
      <a class="nav-link" href="index_en.html">Home</a>
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
        Services</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="buchhaltung_en.html">Accounting</a>
        <a class="dropdown-item" href="steuern_en.html">Taxes</a>
        <a class="dropdown-item" href="beratung_en.html">Consulting</a>
        <a class="dropdown-item" href="software_en.html">Software</a>
      </div>
      <a class="nav-link" href="ueberuns_en.html">About me</a>
      <a class="nav-link" href="kontakt_en.html">Contact</a>
      <a class="nav-link" href="news_en.html">News</a>

    </nav>

  </header>
    
    <section class="jumbotron">
      <div class="container">
        <div class="row">
          <h2>Kontakt</h2>
        </div>
      </div>
    </section>
 
   

<?php


// define variables and set to empty values
$name = $email = $firma = $nachricht  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" and $_POST["kontaktnein"] == "") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $firma = test_input($_POST["firma"]);
  $nachricht = test_input($_POST["nachricht"]);

  $empfaenger = "info@jcas.ch";
  $betreff ="Kontaktformular jcas.ch";
  mail($empfaenger, $betreff, "Name: $name Firma: $firma, Email: $email, Nachricht: $nachricht");
  echo "Thank you for your message, we will come back to you as soon as possible.";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
?>

  <footer>
      <div class="container text-center">
        <p>&copy; 2020 JC Accounting & Solutions GmbH</p>
      </div>
  </footer>
</body>
</html>