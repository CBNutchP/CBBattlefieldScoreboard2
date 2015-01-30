<?php
include("connect.php");
mysql_query( "DELETE * FROM CountTurn");
mysql_query( "DELETE * FROM TurnTb");
mysql_query( "DELETE * FROM PenaltyTb");
mysql_query( "DELETE * FROM KO");
mysql_close(); 
?>