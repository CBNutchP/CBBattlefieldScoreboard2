<?php
$servername="localhost";
$username="root";
$password="mysql";
$database="BattleFieldScore";
$Turn=$_POST['BTurn'];
$BTeam=$_POST['BTeam'];
$BCMD1=$_POST['BCMD1'];
$BCMD2=$_POST['BCMD2'];
$BKO=$_POST['BKO'];
$BFoul=$_POST['BPEN'];
if($BCMD1 =='A' && $BCMD2=='A'){
	$BPIT = 3 + $BFoul;
}
else if($BCMD1 =='A' || $BCMD2=='A'){
	$BPIT = 1 + $BFoul;
}
else{
	$BPIT = 0 + $BFoul;
}
if($BKO == '1'){
	$BPIT =$BPIT-5 + $BFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE TurnTb SET Commander1='$BCMD1',Commander2='$BCMD2',PIT='$BPIT' WHERE Turn=$BTurn,Team=$BTeam "; 
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE PenaltyTb SET Foul='BFoul'  WHERE Turn=$BTurn,Team=$BTeam";
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE KO SET KO='BKO' WHERE Turn=$BTurn,Team=$BTeam ";
mysql_query($query);้เ
mysql_close(); 
echo "แก้แต้มแล้ว";
echo($BTurn);
?>
