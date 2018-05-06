
<!DOCTYPE>

<html>
    <head>
        <title>Acme Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css" type="text/css" media="screen">
        <link href="<?php echo BASE_URL; ?>styles.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <header id="header">
             <?php
            include $_SERVER['DOCUMENT_ROOT'].'/acme/common/header.php';
             ?>
        </header>
        <nav>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/acme/common/nav.php';
            ?>  
        </nav>
        <main>
            
        </main>
        <footer>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/acme/common/footer.php';
            ?>
        </footer>
    </body>
</html>
