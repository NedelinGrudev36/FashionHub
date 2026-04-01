<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'fashionhub'); 
$mysqli->set_charset('utf8'); 
 define("homepage", "home");
?>