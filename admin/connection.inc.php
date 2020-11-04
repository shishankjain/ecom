<?php
session_start();
$con=mysqli_connect("localhost","root","","admin");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/goease1/');
define('SITE_PATH','http://127.0.0.1/php/goease1/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>