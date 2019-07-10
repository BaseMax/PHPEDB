<?php
include "../source/phpedb.php";
//////////////////////////////////////////////////
$db=new database();
$db->connect("localhost","username","*****");
$db->db="database_name";
$db->create_database($db->db,false);
//////////////////////////////////////////////////
// $db->...
