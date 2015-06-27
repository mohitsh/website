<?php include 'config/setup.php'; ?>
<?php 
    #start the session
    //session_start();
    if(!isset($_SESSION['username'])){  #check for user logged in or not
        header('Location: login.php');
    }


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page['label'] . ' | ' . $site_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mohit Shukla student civil Engineering Indian Institute of Technology Kanpur">
        <meta name="keywords" content="Mohit Shukla, IIT Kanpur, Indian Institute of Technology Kanpur, IITK, IIT Kanpur,
              Data Science, Python, Machine Learning, R">
        <?php include 'config/css.php';
              include 'config/js.php';
              
              
        ?> 
    </head>
    <body>
        <?php include D_TEMPLATE.'/navigation.php'; ?>
        <h1>Admin Dashboard</h1>
        <?php include D_TEMPLATE.'/footer.php'; ?>
        
        <?php if($debug == 1) { include 'widgets/debug.php';} ?>
    </body>
</html>
