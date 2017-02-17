<?php
// Creat Connection
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('smilling_star_db', $con)or die(mysql_error());

?>