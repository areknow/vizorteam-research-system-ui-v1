<?php

$dbHost = "localhost";
$dbUser = "ours";
$dbPass = "#OUrs!2014";
$dbDatabase = "crawler";

$db = mysql_connect($dbHost, $dbUser, $dbPass)or die("Error connecting to database.");
mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
