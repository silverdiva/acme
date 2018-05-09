<!DOCTYPE html>
<html>
<html lang="en">


<head>
    <title>Acme Assignment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">

</head>


<body>
    <div id="background">
        <header>
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
            <h1>Welcome to Acme!</h1>
            <div class="hero-image">
                <img src="/acme/images/site/rocketfeature.jpg" id="rocket" alt="Rocket Feature" />
                <div class="flex-container">
                    <div class="hero-text">
                        <h2 id="herotext">Acme Rocket</h2>
                        <ul>
                            <li>Quick lightning fuse</li>
                            <li>NHTSA approved seat belts</li>
                            <li>Mobile launch stand included</li>
                            <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="images/site/iwantit.gif"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <section>
                <div id="featured-recipies">
                    <h3>Featured Recipes</h3>
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
                    <h3> Acme Rocket Reviews</h3>
                    <ul>
                        <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                        <li>"That thing was fast!" (4/5)</li>
                        <li>"Talk about fast delivery." (5/5)</li>
                        <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                        <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                    </ul>
                </div>
            </section>

        </main>

        <footer>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/acme/common/footer.php';
            ?>
        </footer>
    </div>
</body>

</html>
