<?php

$site_title = 'Mohit Shukla';
$page_title = 'Home Page';
include 'config/connection.php';

/*if(!mysql_connect('localhost','root','') || !mysql_select_db("wing")){
    echo mysql_error();
}else{
    //echo "connected!";
}*/
#Constant
define('D_TEMPLATE', 'template');
#including function
include 'functions/data.php';
include 'functions/template.php';

# from data.php this function returns all the required data pro settings table 
$debug = data_settings_value('debug-status');

if(isset($_GET['page'])){
    $pageid = $_GET['page'];  // setting $pageid to the value given in URL
}else{
    $pageid = 1;  // this is the default address i.e. homepage
}

# from data.php this funciton returns all the required data table   
$page = data_page($pageid);





?>