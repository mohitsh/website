<!-- this is the navigation bar on top -->
<nav class="navbar navbar-default" role="navigation">
    <!-- debug button will only show up if debug == 1 -->
    
    
    
    
        <ul class="nav navbar-nav ">
            <?php //nav_main($pageid);?>
            <li><a href="#">DashBoard</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            
        </ul>
    <div class="pull-right">
    <ul class="nav navbar-nav">
        <li>
            <?php if ($debug == 1) { ?>
            <button type = "button" id="btn-debug" class="btn btn-default navbar-btn"><i class="fa fa-bug"></i></button>
            <?php } ?>
        </li>
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
               role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['first'].' '.$user['last'];?>
                <span class="caret"></span></a>
            
            <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
               
        </li>
        
    </ul>
    </div> 
</nav>
<!-- this is the navigation bar on top -->