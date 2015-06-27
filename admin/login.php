<?php 
    session_start();
    #database connection
    include '../config/connection.php'; 
     if($_POST){
        $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
        $r = mysql_query($q);
        $num = mysql_num_rows($r);   # no of rows found when we run the query
        if($num == 1){
            $_SESSION['username'] = $_POST['email'];
            header('Location: index.php');
    }
     }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mohit Shukla student civil Engineering Indian Institute of Technology Kanpur">
        <meta name="keywords" content="Mohit Shukla, IIT Kanpur, Indian Institute of Technology Kanpur, IITK, IIT Kanpur,
              Data Science, Python, Machine Learning, R">
        <?php include 'config/css.php';
              include 'config/js.php';
              
              
        ?> 
    </head>
    <body>
        <?php //include D_TEMPLATE.'/navigation.php'; ?>
            
        <div class="container">
            
            <div class="row">
                
                
                <div class="col-md-8 col-md-offset-2" >
                    <div class="panel panel-info">
                        
                        <div class="panel-heading">
                            <strong>Login</strong>
                        </div>
                        <div class="panel-body">
                            <?php
//                                if($_POST){
//                                    echo $_POST['email'];   #checking for login and password
//                                    echo '<br>';
//                                    echo $_POST['password'];
//                                }
//                            
//                            ?>
                            <form role="form" action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        <!--
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        -->
                        <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        </div> <!-- END panel body tag -->
                    </div> <!-- end panel -->
                </div> <!-- col -->
                
                
            </div> <!-- row -->
                
        </div> <!-- container -->
        <?php //include D_TEMPLATE.'/footer.php'; ?>
        <?php //if($debug == 1) { include 'widgets/debug.php';} ?>
    </body>
</html>
