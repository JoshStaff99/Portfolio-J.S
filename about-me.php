<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Me</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Joshua Stafford Portfolio About Me Page">

    <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <?php include ('inc/header.php'); ?>

        <main>
            <div class="about-me-container">
                <div class="about-me">
                    <h1>Hello My Name is Joshua Stafford</h1>
                    <div class="skills-container"> 
                        <h3>Skills</h3>
                        <p>I have learned a multitude of langauges during my time on the Netmatters scion scheme as well as in my free time which are:</p>
                        <div class="pill-button-container">
                            <button class="pill-button html-color">HTML</button>
                            <button class="pill-button sass-color">CSS/SASS</button>
                            <button class="pill-button javascript-color">JavaScript</button>
                            <button class="pill-button php-color">PHP</button>
                            <button class="pill-button laravel-color">Laravel</button>
                            <button class="pill-button tailwind-color">Tailwin CSS</button>
                            <button class="pill-button csharp-color">C#</button>
                        </div>
                    </div>
                    <div class="my-info-container">
                        <h3>About Me</h3>
                        <ul>
                            <li>Age: 25</li>
                        </ul>
                        <p>I am a passionate and dedicated technologist. I am currently training for a career in tech as a Web Developer. I studied Games Design at the University of Suffolk and graduated in 2022 with a division two.</p>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <?php include ('inc/footer.php'); ?>
        </footer>
        <script src="js/main.js"></script>
    </body>


</html>