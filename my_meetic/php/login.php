<?php session_start();

require_once('ddb.php');
require_once('function.php');

$query = "select firstname, lastname, email, password from user";
$users = $login->ddb_query($query);
login_test($users);

require_once('../html/login.php');