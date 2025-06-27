<?php
include('inc/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage</title>
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
            <div class="about-me-container">
                <a id="about-me"></a>
                <div class="about-me">
                    <h1>Hello My Name is Joshua Stafford</h1>
                    <div class="skills-container">
                        <h3>About Me</h3>
                        <ul>
                            <li>Age: 25</li>
                        </ul>
                        <p>I am a passionate and dedicated technologist. I studied Games Design at the University of Suffolk and graduated in 2022. I am currently training for a career in tech as a Web Developer on the Netmatters scion scheme. I am proficient in an array of different languages including front and back end. I have made multiple projects from the ground up and have also made multiple projects following a brief/strict guidelines.</p> 
                        <h3>Skills</h3>
                        <p>I have learned a multitude of langauges during my time on the Netmatters scion scheme as well as in my free time which are:</p>
                        <div class="pill-button-container">
                            <button class="pill-button html-color">HTML</button>
                            <button class="pill-button sass-color">CSS/SASS</button>
                            <button class="pill-button javascript-color">JavaScript</button>
                            <button class="pill-button php-color">PHP</button>
                            <button class="pill-button laravel-color">Laravel</button>
                            <button class="pill-button tailwind-color">Tailwind CSS</button>
                            <button class="pill-button csharp-color">C#</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="projects-list-container">
                <a id="portfolio"></a>
                <div class="project-container">
                    <div class="projects-item project-1">
                        <a href="https://netmatters.joshua-stafford.netmatters-scs.co.uk" class="project-img-link" target="_blank"><img class="placeholder-project project-img" src="img/Netmatter-Homepage-Mirror.png" alt="Placeholder image"></a>
                        <div class="project-text">
                            <h2>Netmatters Homepage Mirror</h2>
                            <p>Created a mirror version of the Netmatters homepage.</p>
                            <ul class="project-languages project-spacer-1">
                                <li>Languages used</li>
                                <button class="pill-button html-color">HTML</button>
                                <button class="pill-button sass-color">CSS/SASS</button>
                                <button class="pill-button javascript-color">JavaScript/jQuery</button>
                                <button class="pill-button php-color">PHP</button>
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
                                <button class="pill-button html-color">HTML</button>
                                <button class="pill-button sass-color">CSS/SASS</button>
                                <button class="pill-button javascript-color">JavaScript/jQuery</button>
                            </ul>
                            <h3><a class="view-project" href="https://js-array.joshua-stafford.netmatters-scs.co.uk/" target="_blank">View Project</a></h3>
                        </div>
                    </div>
                </div>
                <div class="project-container">
                    <div class="projects-item project-3">
                        <a href="http://laravel.joshua-stafford.netmatters-scs.co.uk/login" class="project-img-link" target="_blank"><img class="placeholder-project project-img" src="img/LaravelAssessment.png" alt="Placeholder image"></a>
                        <div class="project-text">
                            <h2>Laravel System Admin</h2>
                            <p>Created a fake System admin to manage fake companies and their employees using Laravel.</p>
                            <div class="project-languages">
                                <li>Languages used</li>
                                <button class="pill-button html-color">HTML</button>
                                <button class="pill-button sass-color">CSS/SASS</button>
                                <button class="pill-button javascript-color">JavaScript/jQuery</button>
                                <button class="pill-button php-color">PHP</button>
                                <button class="pill-button laravel-color">Laravel</button>
                                <button class="pill-button tailwind-color">Tailwind CSS</button>
                            </div>
                            <h3><a class="view-project" href="http://laravel.joshua-stafford.netmatters-scs.co.uk/login" target="_blank">View Project</a></h3>
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
        <script src="https://kit.fontawesome.com/c6f1d57b66.js" crossorigin="anonymous"></script>
    </body>

</html>