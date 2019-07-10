<?php
include "../source/phpedb.php";
///////////////////////////////////////////////
if(!isset($_GET['id'])) {
    error_page("ERROR!");
}
$id=$_GET['id'];
if(isset($_POST['send'])) {
    $data=$_POST;
    unset($data["send"]);
    unset($data["code"]);
    $db->update("user", ["id"=>$id], $data);
    header("Location: user.php");
    print'<meta http-equiv="refresh" content="0;URL=\'user.php\'" />';
}
$data=$db->select("user", ["id"=>$id]);
// include "header.php";
