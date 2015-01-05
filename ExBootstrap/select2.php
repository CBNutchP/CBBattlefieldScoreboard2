<html>
<body>
<?
$hostname="localhost";
$username="root";
$password="mysql";
$database="employee";

mysql_connect($hostname,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query="SELECT * FROM employee";
$result=mysql_query($query);
?>

<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th>Name</th>
<th>Phone</th>
<th>E-mail</th>
<th>Website</th>
<th colspan=2>Modify</th>
</tr>
<?
while ($row=mysql_fetch_array($result))
{ $id=$row[id];
   $first=$row[first];
   $last=$row[last]; 
   $phone= $row[phone]; 
   $email=$row[email];
   $web= $row[web];

?>

<tr>
<td><? echo $first." ".$last; ?></td>
<td><? echo $phone;?></td>
<td><a href="mailto:<? echo $email; ?>">E-mail</a></td>
<td><a href="<? echo $web; ?>">Website</a></td>
<td><a href="update.php?id=<?echo $id?>">Update</a></td>
<td><a href="delete.php?id=<?echo $id?>">Delete</a></td>
</tr>

<?
}
mysql_close(); 
?>
</table>
</body>
</html>
