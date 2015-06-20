<?php

function nav_main($pageid){
    $q = "SELECT * FROM `pages`";
    $r = mysql_query($q);
    
       while($nav = mysql_fetch_assoc($r)){  ?>
        <li <?php if ($pageid == $nav['id']) { echo 'class="active"';} ?>> <a href="?page=<?php echo $nav['id'];?>"><?php 
        echo $nav['title'];?></a></li>
        <?php } 
}


?>