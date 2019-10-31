<?php
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "airportsystem";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   // echo '<script language="javascript">';
   // echo 'alert("Database Connected Succesfully")';
   // echo '</script>';
    return $conn;
 }
 
function CloseCon($conn)
 {
    $conn -> close();
 }
   
?>
