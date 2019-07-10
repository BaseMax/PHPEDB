<?php
include "../source/phpedb.php";
///////////////////////////////////////////////
// print_r($_POST);
$result=[];
$result["status"]="success";
$result["message"]="success message...";
print json_encode($result);
// print "\n\n";
// function str_starts_with($haystack,  $needle) {
//     return strpos($haystack,  $needle) === 0;
// }
// function str_ends_with($haystack,  $needle) {
//     return strrpos($haystack,  $needle) + strlen($needle) ===
//         strlen($haystack);
// }
$values=[];
foreach($_POST as $key=>$value) {
    $values[$key]=$value;
    //print "==> " . $key . " = " . $value;
}
unset($values["date"]);
unset($values["time"]);
unset($values["ip"]);
$db->insert("user", $values);
