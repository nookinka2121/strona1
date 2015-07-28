<html>
<head>
<title> GUWNO </title>
<link rel="Stylesheet" type="text/css" href="csss.css" />
</head>

<body>
CHUJ CI W DUPE
<br>
<table>

<tr>
    <th></th>
    
<?php


$liczba_wierszy = 6;


  echo "<th>Rok</th>"."<th>Miesiac</th>"."<th>Dzien</th>"."<th>Data</th>";

?>      
</tr>

<?php
$date=new DateTime('now');
for ($i = 1; $i <= $liczba_wierszy; $i++) {
 echo '<tr>';
    
 echo "<th></th>";  
 

 print '<td>'.$date->format('Y').'<br>'.'</td>';
 print '<td>'.$date->format('m').'<br>'.'</td>';
 print '<td>'.$date->format('d').'<br>'.'</td>';
 print '<td>'.$date->format('Y-m-d').'<br>'.'</td>';


 echo '<tr>';
}
?>
<style type="text/css">
  

</style>
</table>
</body>

</html>