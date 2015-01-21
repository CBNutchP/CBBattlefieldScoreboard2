<?php
$servername="localhost";
$username="root";
$password="mysql";
$database="BattleFieldScore";
$Turn=$_POST['cturn'];
$ATeam=$_POST['ATeam'];
$ACMD1=$_POST['ACMD1'];
$ACMD2=$_POST['ACMD2'];
$AKO=$_POST['AKO'];
$AFoul=$_POST['APEN'];
if($ACMD1 =='A' && $ACMD2=='A'){
	$APIT = 3 + $AFoul;
}
else if($ACMD1 =='A' || $ACMD2=='A'){
	$APIT = 1 + $AFoul;
}
else{
	$APIT = 0 + $AFoul;
}
if($AKO == '1'){
	$APIT =$APIT-5 + $AFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE TurnTb SET Commander1='$ACMD1',Commander2='$ACMD2',PIT='$APIT' WHERE Turn=$Turn AND Team=$ATeam "; 
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE PenaltyTb SET Foul='AFoul'  WHERE Turn=$Turn AND Team=$ATeam";
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE KO SET KO='AKO' WHERE Turn=$Turn AND Team=$ATeam ";
mysql_query($query);
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
$query = "UPDATE TurnTb SET Commander1='$BCMD1',Commander2='$BCMD2',PIT='$BPIT' WHERE Turn=$Turn,Team=$BTeam "; 
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE PenaltyTb SET Foul='BFoul'  WHERE Turn=$Turn,Team=$BTeam";
mysql_query($query);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "UPDATE KO SET KO='BKO' WHERE Turn=$Turn,Team=$BTeam ";
mysql_query($query);

mysql_close(); 
echo "แก้แต้มแล้ว";
echo($ATurn);
header("Location: Edit.html"); 
?>
