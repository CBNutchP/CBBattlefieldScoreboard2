<?php
$servername="localhost";
$username="root";
$password="mysql";
$database="BattleFieldScore";
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
?>