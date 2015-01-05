<?
$hostname="localhost";
$username="root";
$password="mysql";
$database="employee";
mysql_connect($hostname,$username,$password) or die( "Unable to connect database");
mysql_select_db($database) or die( "Unable to select database");
$query="CREATE TABLE employee
(id int(6) NOT NULL auto_increment,
first varchar(15) NOT NULL,
last varchar(15) NOT NULL,
phone varchar(20) NOT NULL,
email varchar(30) NOT NULL,
web varchar(30) NOT NULL,
PRIMARY KEY (id))";
mysql_query($query);
mysql_close();
echo "สร้างตาราง employee เรียบร้อยแล้ว";