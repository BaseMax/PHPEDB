<?php
include "../source/phpedb.php";
///////////////////////////////////////////////
if(!isset($_GET['id'])) {
  error_page("ERROR!");
}
$id=$_GET['id'];
$data=$db->delete("user", ["id"=>$id]);
print'<meta http-equiv="refresh" content="0;URL=\'user.php\'" />';

