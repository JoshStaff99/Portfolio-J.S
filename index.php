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
                </div>
                <div class="form-list-container">
                    <form class="forms-container" name="contactForm" id="contactFormSubmit" onsubmit="return validateForm()" method="post">
                        <div class="form-top">
                            <input class="form" type="text" name="fname" placeholder="First Name*" required>
                        </div>
                        <div class="form-top">
                            <input class="form" type="text" name="lname" placeholder="Last Name*" required>
                        </div>
                        <div class="form-bottom">
                            <input class="form" id="telNo" type="text" name="pnumber" placeholder="Phone Number*" required>
                        </div>
                        <div class="form-bottom">
                            <input class="form" id="emailAd" type="text" name="emailaddress" placeholder="Email Address*" required>
                        </div>
                        <div class="form-bottom">
                            <input class="form" type="text" name="subject" placeholder="Subject*" required>
                        </div>
                        <div class="form-bottom">
                            <textarea class="form form-end"  name="message" placeholder="Message*" required></textarea>
                        </div>
                        <div class="form-btn-container">
                            <input class="btn-submit" id="submitBtn" type="button" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-container">
                <div class="back-to-top">
                    <a class="back-to-top-btn" href="#top">Back To Top</a>
                </div>
                <div class="copyright-footer">
                    <small>@ Copyright Joshua Stafford 2024</small>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
        <script src="js/main.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>