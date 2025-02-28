<?php
include('inc/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio J.S Homepage</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Joshua Stafford Portfolio Homepage">

    <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <?php include ('inc/header.php'); ?>
        <header>
            <a id="top"></a>

            <div class="banner-container">
                <div class="banner">
                    <div class="banner-content">
                        <div class="banner-content-container">
                            <h1 class="banner-content-nojs">Hello! my name is Joshua Stafford</h1>
                            <h1 class="banner-content-1" id="banner-typing-1"></h1>
                        </div>
                        <div class="banner-content-container">
                            <h2 class="banner-content-1" id="banner-typing-2"></h2>
                        </div>
                    </div>
                </div>
                <div class="scroll-down">
                    <h3>Scroll down to see my projects!</h3>
                </div>
            </div>
        </header>

        <main>
            <div class="projects-list-container">
                <a id="portfolio"></a>
                <div class="project-container">
                    <div class="projects-item project-1">
                        <a href="https://netmatters.joshua-stafford.netmatters-scs.co.uk" class="project-img-link" target="_blank"><img class="placeholder-project project-img" src="img/Netmatter-Homepage-Mirror.png" alt="Placeholder image"></a>
                        <div class="project-text">
                            <h2>Netmatters Homepage Mirror</h2>
                            <p>Created a mirror version of the Netmatters homepage.</p>
                            <ul class="project-languages">
                                <li>Languages used</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>SCSS</li>
                                <li>JavaScript/jQuery</li>
                            </ul>
                            <h3><a class="view-project" href="https://netmatters.joshua-stafford.netmatters-scs.co.uk" target="_blank">View Project</a></h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-2">
                        <a href="https://js-array.joshua-stafford.netmatters-scs.co.uk/" class="project-img-link" target="_blank"><img class="placeholder-project project-img" src="img/JavaScriptArrayImage.png" alt="Placeholder image"></a>
                        <div class="project-text">
                            <h2>JavaScript Array</h2>
                            <p>Created a JavaScript array that generates random images and adds them to a collection.</p>
                            <ul class="project-languages">
                                <li>Languages used</li>
                                <li>JavaScript/jQuery</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>SCSS</li>
                            </ul>
                            <h3><a class="view-project" href="https://js-array.joshua-stafford.netmatters-scs.co.uk/" target="_blank">View Project</a></h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-3">
                        <img class="placeholder-project project-img" src="img/Portfolioprojectplaceholder.jpg" alt="Placeholder image">
                        <div class="project-text">
                            <h2>Project Three</h2>
                            <h3>View Project</h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-4">
                        <img class="placeholder-project project-img" src="img/Portfolioprojectplaceholder.jpg" alt="Placeholder image">
                        <div class="project-text">
                            <h2>Project Four</h2>
                            <h3>View Project</h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-5">
                        <img class="placeholder-project project-img" src="img/Portfolioprojectplaceholder.jpg" alt="Placeholder image">
                        <div class="project-text">
                            <h2>Project Five</h2>
                            <h3>View Project</h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-6">
                        <img class="placeholder-project project-img" src="img/Portfolioprojectplaceholder.jpg" alt="Placeholder image">
                        <div class="project-text">
                            <h2>Project Six</h2>
                            <h3>View Project</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section-container">
                <a id="contact"></a>
                <div class="form-paragraph-container">
                    <h3>Get in touch</h3>
                    <p>Via this form.</p>
                    <div class="alert alert-danger-hidden" id="alert">

                    </div>
                </div>
                
                <div class="form-list-container">
                    <form class="forms-container" action="inc/contactform.php" name="contactForm" id="contact-form" onsubmit="return validateForm()" method="POST">
                        <div class="form-top">
                            <input id="firstname" class="form form-control" type="text" name="firstname" placeholder="First Name*" value="">
                        </div>
                        <div class="form-top">
                            <input id="lastname"  class="form form-control" type="text" name="lastname" placeholder="Last Name*" value="">
                        </div>
                        <div class="form-bottom">
                            <input class="form form-control" id="telephone" type="text" name="telephone" placeholder="Phone Number*" value="">
                        </div>
                        <div class="form-bottom">
                            <input class="form form-control" id="email" type="email" name="email" placeholder="Email Address*" value="">
                        </div>
                        <div class="form-bottom">
                            <input id="subject" class="form form-control" type="text" name="subject" placeholder="Subject*" value="">
                        </div>
                        <div class="form-bottom">
                            <textarea id="message" class="form form-end form-control"  name="message" placeholder="Message*"></textarea>
                        </div>
                        <div class="form-btn-container">
                            <input class="btn-submit" id="submitBtn" type="button" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include ('inc/footer.php'); ?>
        </footer>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
        <script src="js/main.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>