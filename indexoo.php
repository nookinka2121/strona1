<HTML>
<HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Zgłoszenie</title>
</HEAD>
<BODY>
<?php
  if (isset($_POST["submit"])) {
  // Zostaliśmy przekierowani na stronę z formularza
  // - sprawdzamy, czy wszystkie pola zostały wypełnione

$sprawdz = '/^[a-z]{2,30}$/i';
if ( !preg_match($sprawdz, $_POST["nazwisko"]) ) {
    print 'Wprowadzono błędne nazwisko';
}



$sprawdzKodPocztowy = $_POST['zawod'];
if ( !preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $sprawdzKodPocztowy) ) {
    print 'Wprowadzono błędny kod pocztowy';
}


    if (empty($_POST["imie"]) ||
        empty($_POST["nazwisko"]) ||
        empty($_POST["zawod"]) || empty($_POST["email"])) {
      echo "<p style=\"color:red\">Musisz wypełnić wszystkie pola!</p>";
      echo "<p><a href=\"form1.php\">Powrót do formularza</a></p>";
    } else {
      ?>
      
      
      <ul>
      Imię: <b><?= trim($_POST["imie"]); ?></b>
      <br>Nazwisko: <b><?= trim($_POST["nazwisko"]); ?></b>
      <br>Kod pocztowy: <b><?= trim($_POST["zawod"]); ?></b>
      <br>Adres email: <b><?= trim($_POST["email"]); ?></b>
      
      </ul>
      <?php
    }
  } else {
    // Jeśli użytkownik dostał się na tę stronę w sposób inny niż przez formularz
    // zostaje przekierowany do formularza zgłoszenia
    header("Location: form1.php");
  }
?>
</BODY>
</HTML>