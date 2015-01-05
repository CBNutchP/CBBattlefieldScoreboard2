<?
$hostname="localhost";
$username="root";
$password="mysql";
$database="employee";
$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$web=$_POST['web'];

mysql_connect($hostname,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO employee VALUES ('','$first','$last','$phone','$email','$web')";
mysql_query($query);
mysql_close(); 
echo "เพิ่มข้อมูลเรียบร้อยแล้ว"; 
?>
