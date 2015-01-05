<?
$ud_id=$_POST['ud_id'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_phone=$_POST['ud_phone'];
$ud_email=$_POST['ud_email'];
$ud_web=$_POST['ud_web'];

$hostname="localhost";
$username="root";
$password="mysql";
$database="employee";

mysql_connect($hostname,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");

$query="UPDATE employee SET first='$ud_first', 
last='$ud_last', phone='$ud_phone', email='$ud_email', web='$ud_web' WHERE id=$ud_id";
mysql_query($query);
mysql_close(); 

echo "แก้ไขข้อมูลเรียบร้อยแล้ว";
