
<html><a href="index.php"><img src="wroc.png"/></a></html>
<br>
<?php
include 'config.php';
$connection = @mysql_connect($tablica['localhost'], $tablice['user'], $tablica['password']);
//$connection = @mysql_connect('localhost', 'root', '');
$db = @mysql_select_db($tablica['basename'], $connection);


$query='SELECT * FROM dane';
$result=mysql_query($query);
$num=mysql_numrows($result);

echo "<table cellpadding=\"2\" border=1>";
while($row = mysql_fetch_assoc($result))

{
	
	echo "<tr>";
  echo "<td>".$row['Imie']."</td>"." ";
print "<td>".$row['Nazwisko']."</td>"." ";
print "<td>".$row['Kod']."</td>"." ";
print "<td>".$row['Email']."</td>"."<br>";
echo "</tr>";
}

echo "</table>";
mysql_close($connection);

?> 