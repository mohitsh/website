<?php

function data_settings_value($id){
    # here we are contacting settings table to get the status of debug
    $q = "SELECT * FROM `settings` WHERE `id` = '$id'";
    $r = mysql_query($q);
    $data = mysql_fetch_assoc($r);
    return $data['value']; 
}


function data_page($id){
    $query = "SELECT * FROM `pages` WHERE `id` = $id";
    $query_run = mysql_query($query);
    $data = mysql_fetch_assoc($query_run);
    $data['body_nohtml'] = strip_tags($data['body']);
    if($data['body'] == $data['body_nohtml']){
        $data['body_formatted'] = '<p>'.$data['body'].'</p>';
    }else{
        $data['body_formatted'] = $data['body'];
    }
    return $data;
}


?>