<!DOCTYPE html>
<html>
<html lang="en">


<head>
    <title>Acme Assignment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
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
            <h1> Welcome to Acme! </h1>
            <ul>
                <li>
                    <h2>Acme Rocket</h2>
                </li>
                <li>Quick lighting fuse</li>
                <li>NHTSA approved seat belts</li>
                <li>Mobile launch stand included</li>
                <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="/acme/images/site/iwantit.gif"></a></li>
            </ul>

            <img src="/acme/images/site/rocketfeature.jpg" id="dogrocket" alt="Rocket Feature" />
        </div>

        <section>
            <div id="featured-recipies">
                <h2>Featured Recipes</h2>
                <div class="flex-container">
                    <figure>
                        <img src="images/recipes/bbqsand.jpg" alt="BBQ"><br />
                        <figcaption>Pulled Roadrunner BBQ</figcaption>
                    </figure>
                    <figure>
                        <img src="images/recipes/potpie.jpg" alt="Pot Pie"><br />
                        <figcaption>Roadrunner Pot Pie</figcaption>
                    </figure>
                    <figure>
                        <img src="images/recipes/soup.jpg" alt="Soup"><br />
                        <figcaption>Roadrunner Soup</figcaption>
                    </figure>
                    <figure>
                        <img src="images/recipes/taco.jpg" alt="Taco"><br />
                        <figcaption>Roadrunner Tacos</figcaption>
                    </figure>
                </div>
            </div>

            <div id="rocket-reviews">
                <h2> Acme Rocket Reviews</h2>
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
