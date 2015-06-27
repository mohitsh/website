<?php
    if (!mysql_connect('localhost', 'root', '') || !mysql_select_db("wing")) {
    echo mysql_error();
    } else {
    //echo "connected!";
    }
?>