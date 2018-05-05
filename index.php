<?php

<!DOCTYPE html>

<html>
    <head>
        <title>Acme Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css" type="text/css">
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
            <div id="welcome">
                <p> Welcome to Acme! </p>
                <ul>
                    <li><h2>Acme Rocket</h2></li>
                    <li>Quick lighting fuse</li>
                    <li>NHTSA approved seat belts</li>
                    <li>Mobile launch stand included</li>
                    <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="/acme/images/iwantit.gif"></a></li>
                </ul>
           
                <img src="/acme/images/rocketfeature.jpg" id="dogrocket" alt="Rocket Feature"/>
            </div>
            <div id="featured recipies">
                <P>Featured Recipes</p>
                <a href="#" >Pulled Roadrunner BBQ</a>
                <a href="#">Roadrunner Pot Pie</a>
                <a href="#">Roadrunner Soup</a>
                <a href="#">Roadrunner Tacos</a>
            </div>
            <div id="rocket reviews">
                <p> Get Dinner Rocket Reviews</p>
               <ul>
                    <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                    <li>"That thing was fast!" (4/5)</li>
                    <li>"Talk about fast delivery." (5/5)</li>
                    <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                    <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                </ul>
            </div>
        </main>
        <footer>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/acme/common/footer.php';
            ?>
        </footer>
    </body>
</html>
