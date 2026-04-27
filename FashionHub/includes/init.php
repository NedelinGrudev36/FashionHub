<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$mysqli = new mysqli('localhost', 'root', '', 'fashionhub'); 
$mysqli->set_charset('utf8'); 

if (!defined('homepage')) {
    define("homepage", "home");
}