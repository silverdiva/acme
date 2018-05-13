<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Acme Assignment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kim Llanos">
    <link rel="stylesheet" href="/acme/css/styles.css" type="text/css">
</head>


<body>
    <div id="background">
        <div id="container-body">
            <header>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php';
                    ?>
            </header>

            <nav>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php';
                    ?>
            </nav>

            <main>
                
                <h1>Sorry, there was a problem! Server Error</h1>
                <p>Our Servers couldn't connect. Please try again later</p>
            </main>

            <footer>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';
                    ?>
            </footer>
        </div>
    </div>
</body>

</html>