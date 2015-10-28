<?php

function listGroupRating()
{ 	
require("bd.php");
	$strSQL = "SELECT * FROM students";
	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {

	  $output[]=$row;

	  }
	  mysql_close();
	  return $output;
}

function listGroup(){
	
	require("bd.php");
	$strSQL = "SELECT * FROM groups";
	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {

	  $output[]=$row;

	  }
	  mysql_close();
	  return $output;	
}
function listPrep(){
	
	require("bd.php");
	$strSQL = "SELECT * FROM teachers";
	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {

	  $output[]=$row;

	  }
	  mysql_close();
	  return $output;	
}
	

?>