<?php
session_start();

$_SESSION['login']['username'] = 'phancuong.qt';

// print_r($_SESSION);
echo "<pre>";
echo $_SESSION['login']['username'];
?>