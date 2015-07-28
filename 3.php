
<?php


$id=$_GET['id'];
$connection = @mysql_connect('localhost', 'root', '');

$db = @mysql_select_db('informacje', $connection);






$query=" SELECT * FROM contacts WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();

$i=0;
while ($i < $num) {
$imie=mysql_result($result,$i,"Imie");
$nazwisko=mysql_result($result,$i,"Nazwisko");
$kod=mysql_result($result,$i,"Kod");
$email=mysql_result($result,$i,"Email");


<form action="" method="post">
<input type="hidden" name="ud_id" value="<? echo $id; ?>">
Imie: <input type="text" name="ud_first" value="<? echo $first; ?>"><br>
Ostatnie imie: <input type="text" name="ud_last" value="<? echo $last; ?>"><br>
Telefon stacjonarny: <input type="text" name="ud_phone" value="<? echo $phone; ?>"><br>
Telefon komórkowy: <input type="text" name="ud_mobile" value="<? echo $mobile; ?>"><br>
Fax: <input type="text" name="ud_fax" value="<? echo $fax; ?>"><br>
Adres E-mail: <input type="text" name="ud_email" value="<? echo $email; ?>"><br>
Adres WWW: <input type="text" name="ud_web" value="<? echo $web; ?>"><br>
<input type="Submit" value="Aktualizuj">
</form>

++$i;
}




mysql_close($connection);

?> 