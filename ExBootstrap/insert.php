<?php
$servername="localhost";
$username="root";
$password="mysql";
$database="BattleFieldScore";
$Turn=$_POST['Turn'];
$ATeam=$_POST['ATeam'];
$ACMD1=$_POST['ACMD1'];
$ACMD2=$_POST['ACMD2'];
$AKO=$_POST['AKO'];
$AFoul=$_POST['APEN'];
if($ACMD1 =='A' && $ACMD2=='A'){
	$APIT = 3 + $AFoul;
}
elseif($ACMD1 =='A' || $ACMD2=='A'){
	$APIT = 1 + $AFoul;
}
else{
	$APIT = 0 + $AFoul;
}
if($AKO == '1'){
	$APIT =$APIT-5 + $AFoul;
}
print_r($APIT);
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO CountTurn VALUES ('$Turn')";
mysql_query($query);
mysql_close(); 
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$ATeam','$ACMD1','$ACMD2','$APIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$ATeam','$AFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$ATeam','$AKO')";
mysql_query($query);
mysql_close(); 
$BTeam=$_POST['BTeam'];
$BCMD1=$_POST['BCMD1'];
$BCMD2=$_POST['BCMD2'];
$BKO=$_POST['BKO'];
$BFoul=$_POST['BPEN'];
if($BCMD1 =="A" && $BCMD2=="A"){
	$BPIT = 3 + $BFoul;
}
elseif($BCMD1 =='A' || $BCMD2=='A'){
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
$query = "INSERT INTO TurnTb VALUES ('$Turn','$BTeam','$BCMD1','$BCMD2','$BPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$BTeam','$BFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$BTeam','$BKO')";
mysql_query($query);
mysql_close(); 
$CTeam=$_POST['CTeam'];
$CCMD1=$_POST['CCMD1'];
$CCMD2=$_POST['CCMD2'];
$CKO=$_POST['CKO'];
$CFoul=$_POST['CPEN'];
if($CCMD1 =='A' && $CCMD2=='A'){
	$CPIT = 3 +  $CFoul;
}
elseif($CCMD1 =='A' || $CCMD2=='A'){
	$CPIT = 1 + $CFoul;
}
else{
	$CPIT = 0 + $CFoul;
}
if($CKO == '1'){
	$CPIT =$CPIT-5 + $CFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$CTeam','$CCMD1','$CCMD2','$CPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$CTeam','$CFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$CTeam','$CKO')";
mysql_query($query);
mysql_close(); 
$DTeam=$_POST['DTeam'];
$DCMD1=$_POST['DCMD1'];
$DCMD2=$_POST['DCMD2'];
$DKO=$_POST['DKO'];
$DFoul=$_POST['DPEN'];
if($DCMD1 =="A" && $DCMD2=="A"){
	$DPIT = 3 + $DFoul;
}
elseif($DCMD1 =='A' || $DCMD2=='A'){
	$DPIT = 1 + $DFoul;
}
else{
	$DPIT = 0 + $DFoul;
}
if($DKO == '1'){
	$DPIT =$DPIT-5 + $DFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$DTeam','$DCMD1','$DCMD2','$DPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$DTeam','$DFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$DTeam','$DKO')";
mysql_query($query);
mysql_close(); 
$ETeam=$_POST['ETeam'];
$ECMD1=$_POST['ECMD1'];
$ECMD2=$_POST['ECMD2'];
$EKO=$_POST['EKO'];
$EFoul=$_POST['EPEN'];
if($ECMD1 =='A' && $ECMD2=='A'){
	$EPIT = 3 + $EFoul;
}
elseif($ECMD1 =='A' || $ECMD2=='A'){
	$EPIT = 1 + $EFoul;
}
else{
	$EPIT = 0 + $EFoul;
}
if($EKO == '1'){
	$EPIT =$EPIT-5 + $EFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$ETeam','$ECMD1','$ECMD2','$EPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$ETeam','$EFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$ETeam','$EKO')";
mysql_query($query);
mysql_close(); 
$FTeam=$_POST['FTeam'];
$FCMD1=$_POST['FCMD1'];
$FCMD2=$_POST['FCMD2'];
$FKO=$_POST['FKO'];
$FFoul=$_POST['FPEN'];
if($FCMD1 =="A" && $FCMD2=="A"){
	$FPIT = 3 + $FFoul;
}
elseif($FCMD1 =='A' || $FCMD2=='A'){
	$FPIT = 1 + $FFoul;
}
else{
	$FPIT = 0 + $FFoul;
}
if($FKO == '1'){
	$FPIT =$FPIT-5;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$FTeam','$FCMD1','$FCMD2','$FPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$FTeam','$FFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$FTeam','$FKO')";
mysql_query($query);
mysql_close(); 
$GTeam=$_POST['GTeam'];
$GCMD1=$_POST['GCMD1'];
$GCMD2=$_POST['GCMD2'];
$GKO=$_POST['GKO'];
$GFoul=$_POST['GPEN'];
if($GCMD1 =='A' && $GCMD2=='A'){
	$GPIT = 3 + $GFoul;
}
elseif($GCMD1 =='A' || $GCMD2=='A'){
	$GPIT = 1 + $GFoul;
}
else{
	$GPIT = 0 + $GFoul;
}
if($GKO == '1'){
	$GPIT =$GPIT-5 + $GFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$GTeam','$GCMD1','$GCMD2','$GPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$GTeam','$GFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$GTeam','$GKO')";
mysql_query($query);
mysql_close(); 
$HTeam=$_POST['HTeam'];
$HCMD1=$_POST['HCMD1'];
$HCMD2=$_POST['HCMD2'];
$HKO=$_POST['HKO'];
$HFoul=$_POST['HPEN'];
if($HCMD1 =="A" && $HCMD2=="A"){
	$HPIT = 3 + $HFoul;
}
elseif($HCMD1 =='A' || $HCMD2=='A'){
	$HPIT = 1 + $HFoul;
}
else{
	$HPIT = 0 + $HFoul;
}
if($HKO == '1'){
	$HPIT =$HPIT-5 + $HFoul;
}
mysql_connect($servername,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO TurnTb VALUES ('$Turn','$HTeam','$HCMD1','$HCMD2','$HPIT')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO PenaltyTb VALUES ('$Turn','$HTeam','$HFoul')";
mysql_query($query);
mysql_select_db($database) or die("Unable to select database");
$query = "INSERT INTO KO VALUES ('$Turn','$HTeam','$HKO')";
mysql_query($query);
mysql_close(); 
echo "เพิ่มแต้มแล้ว";
header("Location: InputScore.html"); 
?>
