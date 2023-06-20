<?php session_start();

require_once('ddb.php');

$query = "select name from hobbies order by name";
$hobbiesArray = $hobbies->ddb_query($query);

require_once('../html/registration.php');