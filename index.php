<?php include 'config/setup.php'; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page['label'] . ' | ' . $site_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'config/css.php';
              include 'config/js.php';
              
              
        ?>
    </head>
    <body>
        <?php include D_TEMPLATE.'/navigation.php'; ?>
        <div class="container">
            <h2><?php echo $page['header']; ?></h2>
            <?php echo $page['body_formatted']; ?>
        </div>
        <?php include D_TEMPLATE.'/footer.php'; ?>
    </body>
</html>
