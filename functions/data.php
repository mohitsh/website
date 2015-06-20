<?php


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