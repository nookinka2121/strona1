<html lang="pl">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Formularz</title>

</head>

<body>

  <form action="" method="post">

  <div>

  Imie:<br />
djdjdjdjd
  <input name="imie" value="" /><br />

  Nazwisko:<br />

  <input name="nazwisko" value="" /><br />

  Kod Pocztowy:<br />

  <input name="kod" value="" /><br />

  Adres e-mail:<br />

  <input name="email" value="" /><br />

 <input type="submit" value="Dodaj" name="submit" />
 <br><br>
 
<a href="index.php"><img src="wroc.png"/></a>

  </div>

  </form>
   
</body>

</html>


<?php

if(isset($_POST['submit'])){
$connection = @mysql_connect('mysql.cba.pl', 'nookinka', 'mamatata4');

$db = @mysql_select_db('lernen_cba_pl', $connection);


$query='SELECT * FROM dane';


$sprawdz = '/^[a-z]{2,30}$/i';
if ( !preg_match($sprawdz, $_POST["imie"]) ) {
    print 'Podaj poprawne imie<br>';
    $_POST["imie"]=NULL;
} else
{
$imie = $_POST['imie'];
}

$sprawdz = '/^[a-z]{2,30}$/i';
if ( !preg_match($sprawdz, $_POST["nazwisko"]) ) {
    print 'Podaj poprawne nazwisko<br>';
    $_POST["nazwisko"]=NULL;
} else
{
$nazwisko = $_POST['nazwisko'];
}


if ( !preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $_POST['kod'] ) ){
    print 'Podaj poprawny kod<br>';
    $_POST["kod"]=NULL;
}
else{$kod = $_POST['kod'];}

$email = $_POST['email'];


  if (empty($_POST["imie"]) ||
        empty($_POST["nazwisko"]) ||
        empty($_POST["kod"]) || empty($_POST["email"])) {
      print 'Podaj poprawne dane<br>';
    } 
else{
$query = "insert into dane(Imie, Nazwisko, Kod, Email) 
values ('".$imie."', '".$nazwisko."','".$kod."','".$email."')";
//print 'Zapisano w Bazie!<br>';

}


$result=mysql_query($query);

mysql_close($connection);
}
?>