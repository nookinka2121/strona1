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
    if (empty($_POST["imie"]) ||
        empty($_POST["nazwisko"]) ||
        empty($_POST["zawod"]) || empty($_POST["email"])) {
      echo "<p style=\"color:red\">Musisz wypełnić wszystkie pola!</p>";
      echo "<p><a href=\"form1.php\">Powrót do formularza</a></p>";
    } else {
      ?>
      <h3>Dziękujemy za zgłoszenie!</h3>
      <p>Twoje dane:</p>
      <ul>
      <li>Imię: <b><?= trim($_POST["imie"]); ?></b></li>
      <li>Nazwisko: <b><?= trim($_POST["nazwisko"]); ?></b></li>
      <li>Zawód: <b><?= trim($_POST["zawod"]); ?></b></li>
      <li>Adres email: <b><?= trim($_POST["email"]); ?></b></li>
      <?php
      if (isset($_POST["mailing"]))
        echo "<li>Chcesz otrzymywać informacje handlowe.</li>";
      else
        echo "<li>Nie chcesz otrzymywać informacji handlowych.</li>";
      ?>
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