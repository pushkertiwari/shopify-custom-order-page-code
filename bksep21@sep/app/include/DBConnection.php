<?php
ob_start();
session_start();
include 'vendor/autoload.php';
$db = new Mysqli("localhost", "root", "india@123", "bleefs_app");
if($db->connect_errno){
  die('Connect Error: ' . $db->connect_errno);
}

$select_settings = $db->query("SELECT * FROM tbl_appsettings WHERE id = 1");
$app_settings = $select_settings->fetch_object();


?>

