<?php
include("connect.php");
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
$BTeam=$_POST['BTeam'];
$BCMD1=$_POST['BCMD1'];
$BCMD2=$_POST['BCMD2'];
$BKO=$_POST['BKO'];
$BFoul=$_POST['BPEN'];
if($BCMD1 =='A' && $BCMD2=='A'){
	$BPIT = 3 + $BFoul;
}
else if($ACMD1 =='A' || $ACMD2=='A'){
	$BPIT = 1 + $BFoul;
}
else{
	$BPIT = 0 + $BFoul;
}
if($AKO == '1'){
	$BPIT =$BPIT-5 + $BFoul;
}
$CTeam=$_POST['CTeam'];
$CCMD1=$_POST['CCMD1'];
$CCMD2=$_POST['CCMD2'];
$CKO=$_POST['CKO'];
$CFoul=$_POST['CPEN'];
if($CCMD1 =='A' && $CCMD2=='A'){
	$CPIT = 3 + $CFoul;
}
else if($ACMD1 =='A' || $ACMD2=='A'){
	$CPIT = 1 + $CFoul;
}
else{
	$CPIT = 0 + $CFoul;
}
if($CKO == '1'){
	$CPIT =$CPIT-5 + $CFoul;
}
$DTeam=$_POST['DTeam'];
$DCMD1=$_POST['DCMD1'];
$DCMD2=$_POST['DCMD2'];
$DKO=$_POST['DKO'];
$DFoul=$_POST['DPEN'];
if($DCMD1 =='A' && $DCMD2=='A'){
	$APIT = 3 + $AFoul;
}
else if($DCMD1 =='A' || $DCMD2=='A'){
	$DPIT = 1 + $DFoul;
}
else{
	$DPIT = 0 + $DFoul;
}
if($DKO == '1'){
	$DPIT =$DPIT-5 + $DFoul;
}
$ETeam=$_POST['ETeam'];
$ECMD1=$_POST['ECMD1'];
$ECMD2=$_POST['ECMD2'];
$EKO=$_POST['EKO'];
$EFoul=$_POST['EPEN'];
if($ECMD1 =='A' && $ECMD2=='A'){
	$EPIT = 3 + $EFoul;
}
else if($ECMD1 =='A' || $ECMD2=='A'){
	$EPIT = 1 + $EFoul;
}
else{
	$EPIT = 0 + $EFoul;
}
if($EKO == '1'){
	$EPIT =$EPIT-5 + $EFoul;
}
$FTeam=$_POST['FTeam'];
$FCMD1=$_POST['FCMD1'];
$FCMD2=$_POST['FCMD2'];
$FKO=$_POST['FKO'];
$FFoul=$_POST['FPEN'];
if($FCMD1 =='A' && $FCMD2=='A'){
	$FPIT = 3 + $FFoul;
}
else if($FCMD1 =='A' || $FCMD2=='A'){
	$FPIT = 1 + $FFoul;
}
else{
	$FPIT = 0 + $FFoul;
}
if($FKO == '1'){
	$FPIT =$FPIT-5 + $FFoul;
}
$GTeam=$_POST['GTeam'];
$GCMD1=$_POST['GCMD1'];
$GCMD2=$_POST['GCMD2'];
$GKO=$_POST['GKO'];
$GFoul=$_POST['GPEN'];
if($GCMD1 =='A' && $GCMD2=='A'){
	$GPIT = 3 + $GFoul;
}
else if($GCMD1 =='A' || $GCMD2=='A'){
	$GPIT = 1 + $GFoul;
}
else{
	$GPIT = 0 + $GFoul;
}
if($GKO == '1'){
	$GPIT =$GPIT-5 + $GFoul;
}
$HTeam=$_POST['HTeam'];
$HCMD1=$_POST['HCMD1'];
$HCMD2=$_POST['HCMD2'];
$HKO=$_POST['HKO'];
$HFoul=$_POST['HPEN'];
if($HCMD1 =='A' && $HCMD2=='A'){
	$HPIT = 3 + $HFoul;
}
else if($HCMD1 =='A' || $HCMD2=='A'){
	$HPIT = 1 + $HFoul;
}
else{
	$HPIT = 0 + $HFoul;
}
if($HKO == '1'){
	$HPIT =$HPIT-5 + $HFoul;
}
mysql_query( "UPDATE TurnTb SET Commander1='$ACMD1',Commander2='$ACMD2',PIT='$APIT' WHERE Turn='$Turn' AND Team='$ATeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$AFoul'  WHERE Turn='$Turn' AND Team='$ATeam'");
mysql_query( "UPDATE KO SET KO='$AKO' WHERE Turn='$Turn' AND Team='$ATeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$BCMD1',Commander2='$BCMD2',PIT='$BPIT' WHERE Turn='$Turn' AND Team='$BTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$BFoul'  WHERE Turn='$Turn' AND Team='$BTeam'");
mysql_query( "UPDATE KO SET KO='$BKO' WHERE Turn='$Turn' AND Team='$BTeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$CCMD1',Commander2='$CCMD2',PIT='$CPIT' WHERE Turn='$Turn' AND Team='$CTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$AFoul'  WHERE Turn='$Turn' AND Team='$ATeam'");
mysql_query( "UPDATE KO SET KO='$AKO' WHERE Turn='$Turn' AND Team='$ATeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$DCMD1',Commander2='$DCMD2',PIT='$DPIT' WHERE Turn='$Turn' AND Team='$DTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$DFoul'  WHERE Turn='$Turn' AND Team='$DTeam'");
mysql_query( "UPDATE KO SET KO='$DKO' WHERE Turn='$Turn' AND Team='$DTeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$ECMD1',Commander2='$ECMD2',PIT='$EPIT' WHERE Turn='$Turn' AND Team='$ETeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$EFoul'  WHERE Turn='$Turn' AND Team='$ETeam'");
mysql_query( "UPDATE KO SET KO='$EKO' WHERE Turn='$Turn' AND Team='$ETeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$FCMD1',Commander2='$FCMD2',PIT='$FPIT' WHERE Turn='$Turn' AND Team='$FTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$FFoul'  WHERE Turn='$Turn' AND Team='$FTeam'");
mysql_query( "UPDATE KO SET KO='$FKO' WHERE Turn='$Turn' AND Team='$FTeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$GCMD1',Commander2='$GCMD2',PIT='$GPIT' WHERE Turn='$Turn' AND Team='$GTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$GFoul'  WHERE Turn='$Turn' AND Team='$GTeam'");
mysql_query( "UPDATE KO SET KO='$GKO' WHERE Turn='$Turn' AND Team='$GTeam' ");
mysql_query( "UPDATE TurnTb SET Commander1='$HCMD1',Commander2='$HCMD2',PIT='$HPIT' WHERE Turn='$Turn' AND Team='$HTeam' ");
mysql_query( "UPDATE PenaltyTb SET Foul='$HFoul'  WHERE Turn='$Turn' AND Team='$HTeam'");
mysql_query( "UPDATE KO SET KO='$HKO' WHERE Turn='$Turn' AND Team='$HTeam' ");
echo "แก้แต้มแล้ว";
header("Location: Edit.html"); 
?>
