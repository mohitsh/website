<!-- this is the navigation bar on top -->
<nav class="navbar navbar-inverse" role="navigation">
    <!-- debug button will only show up if debug == 1 -->
    
    <?php if($debug == 1){ ?>
    <button id="btn-debug" class="btn btn-primary"><i class="fa fa-bug"></i></button>
    <?php } ?>
    
    <div class="container">
        <ul class="nav navbar-nav">
            <?php nav_main($pageid);?>
        </ul>
    </div>    
</nav>
<!-- this is the navigation bar on top -->