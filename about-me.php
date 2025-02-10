<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio J.S About Me</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Joshua Stafford Portfolio About Me Page">

    <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <div class="navbar-top-container">
            <div class="nav-top-logo">
                <h2><a href="index.php">J S</a></h2>
            </div>
            <div class="nav-top-burgermenu" id="nav-top-burgermenu-nojs" onclick="burgermenuClick()">
                <span class="icon-menu"></span>
            </div>
            <div class="nav-top-dropdown-menu-container" id="dropdown-menu-container">
                <ul>
                    <li><a href="about-me.php">About Me</a></li>
                    <li><a href="index.php#portfolio">My Portfolio</a></li>
                    <li><a href="coding-examples.php">Coding Examples</a></li>
                    <li><a href="scs-scheme.php">SCS Scheme</a></li>
                </ul>
            </div>
        </div>
        <header>
            <a id="top"></a>

        </header>

        <div class="navbar">
            <div class="nav-logo">
                <h2><a href="index.php">J S</a></h2>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="about-me.php">About Me</a></li>
                    <li><a href="index.php#portfolio">My Portfolio</a></li>
                    <li><a href="coding-examples.php">Coding Examples</a></li>
                    <li><a href="scs-scheme.php">SCS Scheme</a></li>
                </ul>
            </div>
            <div class="contact-me">
                <strong><a href="index.php#contact">Contact Me</a></strong>
            </div>
            <div class="nav-socials">
                <a href="https://www.linkedin.com/in/joshua-stafford-798862240/" target="_blank"><span class="icon-linkedin2"></span></a>
            </div>
        </div>

        <main>
            <div class="about-me-container">
                <div class="about-me">
                    <h1>Hello My Name is Joshua Stafford</h1>
                    <div class="skills-container"> 
                        <h3>Skills</h3>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                        </ul>
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
            <div class="footer-container">
                <div class="copyright-footer">
                    <small>@ Copyright Joshua Stafford 2024</small>
                </div>
            </div>
        </footer>
        <script src="js/main.js"></script>
    </body>


</html>