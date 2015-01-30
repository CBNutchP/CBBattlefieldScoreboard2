<?php
include("connect.php");

$strSQL = "SELECT Turn FROM CountTurn";
$objQuery = mysql_query($strSQL) or die (mysql_error());
$intNumField = mysql_num_fields($objQuery);
$resultArray = array();
//print "<select>";
while($obResult = mysql_fetch_array($objQuery))
{
$arrCol = array();
for($i=0;$i<$intNumField;$i++)
{
$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
}
array_push($resultArray,$arrCol);
//print "<option value='' disabled='disabled' selected='selected'> Please Select Turn </option>";
//pint "<option value='1'>".$obResult['Turn']."</option>";
}
//print "</select>";
mysql_close();
echo json_encode($resultArray);

?>