<?php

$servername = "localhost";
$dBUsername = "dbh";
$dBPassword = "Wop7aJUcAC8ETQbI";
$dBName = "loginsystem";
//
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection aborted: ".mysqli_connect_error());
}