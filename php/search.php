<?php
session_start();
include_once 'config.php';
$item=mysqli_real_escape_string($conn,$_POST['searchterm']);
echo $item;