<?php include 'config/setup.php'; ?>

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
        <div class="container">
            <?php echo $page['header']; ?>
            <?php echo $page['body_formatted']; ?>
        </div>
        <?php include D_TEMPLATE.'/footer.php'; ?>
        
        <?php if($debug == 1) { include 'widgets/debug.php';} ?>
    </body>
</html>
