<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio J.S Coding Examples</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Joshua Stafford Portfolio Coding Examples Page">

    <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <?php include ('inc/header.php'); ?>

        <main>
            <div class="coding-examples-container">
                <div class="coding-example-subcontainer-1">
                    <h1>Netmatters homepage coding example</h1>
                    <img class="coding-img coding-img-1" src="img/coding-examples/Coding-example-1.png" alt="Coding example image">
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <li>CSS</li>
                    </ul>
                    <p>This code is used for images inside a track in the case study section of the Netmatters homepage mirror.</p>
                    <p>The code adds a greyscale effect to images and styles the images to fit correctly inside the track and removes any overflow from the page. I used this code to give the images the correct styling needed and to make sure the images do not cause viewport errors with overflow</p>
                </div>

                <div class="coding-example-subcontainer-1">
                    <h1>JavaScript array coding example</h1>
                    <img class="coding-img coding-img-1" src="img/coding-examples/Coding-example-2.png" alt="Coding example image">
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <li>JavaScript/jQuery</li>
                    </ul>
                    <p>This code is used for the alert box present in the JavaScript array project.</p>
                    <p>This JavaScript function displays messages in the alert box present in the projects HTML. It has an if statement to check if the alert box should display an "error" or "success" message when a function is performed successfully</p>
                </div>

                <div class="coding-example-subcontainer-1">
                    <h1>Laravel fake admin system coding example</h1>
                    <img class="coding-img coding-img-1" src="img/coding-examples/Coding-example-3.png" alt="Coding example image">
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <li>PHP</li>
                    </ul>
                    <p>This code is used for the routes file within my Laravel system admin Project.</p>
                    <p>The code above deals routes handling for my Laravel system admin project. It handles middleware and authentification, if a user does not have autheticificaton they are redirected to the login screen.</p>
                </div>
            </div>
        </main>

        <footer>
            <?php include ('inc/footer.php'); ?>
        </footer>
        <script src="js/main.js"></script>
    </body>


</html>