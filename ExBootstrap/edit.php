<?php
include("connect.php");
$Turn=$_POST['cturn'];
$Team=$_POST['cteam'];
$rTeam;
$CMD1=$_POST['CMD1'];
$CMD2=$_POST['CMD2'];
$KO=$_POST['KO'];
$Foul=$_POST['PEN'];
if($Team == 'RED'){
	$rTeam = 'A';
}else if($Team == 'GREEN'){
	$rTeam = 'B';
}else if($Team == 'YELLOW'){
	$rTeam = 'C';
}
else if($Team == 'BLUE'){
	$rTeam = 'D';
}else if($Team == 'CYAN'){
	$rTeam = 'E';
}else if($Team == 'PINK'){
	$rTeam = 'F';
}else if($Team == 'PURPLE'){
	$rTeam = 'G';
}else if($Team == 'ORANGE'){
	$rTeam = 'H';
}
if($CMD1 =='A' && $CMD2=='A'){
	$PIT = 3 + $Foul;
}
else if($CMD1 =='A' || $CMD2=='A'){
	$PIT = 1 + $Foul;
}
else{
	$PIT = 0 + $Foul;
}
if($KO == '1'){
	$PIT =$PIT-5 + $Foul;
}
mysql_query( "UPDATE TurnTb SET Commander1='$CMD1',Commander2='$CMD2',PIT='$PIT' WHERE Turn='$Turn' AND Team='$rTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$AFoul'  WHERE Turn='$Turn' AND Team='$Team'");
mysql_query( "UPDATE KO SET KO='$KO' WHERE Turn='$Turn' AND Team='$Team' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$BCMD1',Commander2='$BCMD2',PIT='$BPIT' WHERE Turn='$Turn' AND Team='$BTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$BFoul'  WHERE Turn='$Turn' AND Team='$BTeam'");
// mysql_query( "UPDATE KO SET KO='$BKO' WHERE Turn='$Turn' AND Team='$BTeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$CCMD1',Commander2='$CCMD2',PIT='$CPIT' WHERE Turn='$Turn' AND Team='$CTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$AFoul'  WHERE Turn='$Turn' AND Team='$ATeam'");
// mysql_query( "UPDATE KO SET KO='$AKO' WHERE Turn='$Turn' AND Team='$ATeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$DCMD1',Commander2='$DCMD2',PIT='$DPIT' WHERE Turn='$Turn' AND Team='$DTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$DFoul'  WHERE Turn='$Turn' AND Team='$DTeam'");
// mysql_query( "UPDATE KO SET KO='$DKO' WHERE Turn='$Turn' AND Team='$DTeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$ECMD1',Commander2='$ECMD2',PIT='$EPIT' WHERE Turn='$Turn' AND Team='$ETeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$EFoul'  WHERE Turn='$Turn' AND Team='$ETeam'");
// mysql_query( "UPDATE KO SET KO='$EKO' WHERE Turn='$Turn' AND Team='$ETeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$FCMD1',Commander2='$FCMD2',PIT='$BPIT' WHERE Turn='$Turn' AND Team='$FTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$FFoul'  WHERE Turn='$Turn' AND Team='$FTeam'");
// mysql_query( "UPDATE KO SET KO='$FKO' WHERE Turn='$Turn' AND Team='$FTeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$GCMD1',Commander2='$GCMD2',PIT='$GPIT' WHERE Turn='$Turn' AND Team='$GTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$GFoul'  WHERE Turn='$Turn' AND Team='$GTeam'");
// mysql_query( "UPDATE KO SET KO='$GKO' WHERE Turn='$Turn' AND Team='$GTeam' ");
// mysql_query( "UPDATE TurnTb SET Commander1='$HCMD1',Commander2='$HCMD2',PIT='$HPIT' WHERE Turn='$Turn' AND Team='$HTeam' ");
// mysql_query( "UPDATE PenaltyTb SET Foul='$HFoul'  WHERE Turn='$Turn' AND Team='$HTeam'");
// mysql_query( "UPDATE KO SET KO='$HKO' WHERE Turn='$Turn' AND Team='$HTeam' ");
echo "แก้แต้มแล้ว";
header("Location: Edit.html"); 
?>
