<?php
/**
 *
 * @Name : phpedb.php
 * @Version : 1.0
 * @Programmer : Max
 * @Date : 2016-2019, 2019-07-10
 * @Released under : https://github.com/BaseMax/PHPEDB/blob/master/LICENSE
 * @Repository : https://github.com/BaseMax/PHPEDB
 *
 **/
date_default_timezone_set('America/Los_Angeles');
function error_page($error)
{
	$style="";
    // $style="
    // <style>
    // @font-face
    // {
    //   font-family:'site1';
    //   src:url('fonts/site1.woff') format('woff'),
    //       url('fonts/site1.ttf') format('truetype');
    //   font-weight:normal;
    // }
    // @font-face
    // {
    //   font-family:'site2';
    //   src:url('fonts/site2.woff') format('woff'),
    //       url('fonts/site2.ttf') format('truetype');
    //   font-weight:bold;
    // }
    // body
    // {
    // 	direction: rtl;
    // 	font-family:'site1';
    // }
    // </style>
    // ";
	exit("<meta charset=\"utf-8\">".$style."<br><br><center><h1>Error : ".$error."</h1></center>");
}
