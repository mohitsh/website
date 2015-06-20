<?php

$site_title = 'caped 1.0';
$page_title = 'Home Page';

if(!mysql_connect('localhost','root','') || !mysql_select_db("wing")){
    echo mysql_error();
}else{
    //echo "connected!";
}
#Constant
define('D_TEMPLATE', 'template');
#including function
include 'functions/data.php';
include 'functions/template.php';
if(isset($_GET['page'])){
    $pageid = $_GET['page'];  // setting $pageid to the value given in URL
}else{
    $pageid = 1;  // this is the default address i.e. homepage
}

#page setup
$page = data_page($pageid);
?>