<html>
<body>
<?
$id=$_GET['id'];

$hostname="localhost";
$username="root";
$password="mysql";
$database="employee";

mysql_connect($hostname,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query="SELECT * FROM employee WHERE id=$id";
$result=mysql_query($query);


while ($row=mysql_fetch_array($result))
{ $first=$row[first];
   $last=$row[last]; 
   $phone= $row[phone]; 
   $email=$row[email];
   $web= $row[web];
?>
<form action="update_record.php" method="post">
    <input type="hidden" name="ud_id" value="<? echo $id; ?>">
    First Name: <input type="text" name="ud_first" value="<? echo $first; ?>"><br>
    Last Name: <input type="text" name="ud_last" value="<? echo $last; ?>"><br>
    Phone Number: <input type="text" name="ud_phone" value="
                                <? echo $phone; ?>"><br>
    E-mail Address: <input type="text" name="ud_email" value=“
                                <? echo $email; ?>"><br>
    Web Address:  <input type="text" name="ud_web" value=“
                              <? echo $web; ?>"><br>
    <input type="Submit" value="Update">
</form> 

<?
}
mysql_close(); 
?>
</body>
</html>
