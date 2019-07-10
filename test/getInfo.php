<?php
include "../source/phpedb.php";
///////////////////////////////////////////////
$code=$_GET['code'];
$clause=["code"=>$code];
$count=$db->count("table", $clause);
if($count > 0)
{
	$table=$db->select("table",$clause);
	print $table["id"];
}
else
{
	print "none";
}
