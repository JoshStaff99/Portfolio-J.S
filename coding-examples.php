<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coding Examples</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Joshua Stafford Portfolio Coding Examples Page">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/prism.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>
    </head>

    <body class="language-css">
        <?php include ('inc/header.php'); ?>

        <main>
            <div class="coding-examples-container">
                <div class="coding-example-subcontainer-1">
                    <h1>Netmatters homepage coding example</h1>
                    <pre class="coding-img-1"><code class="language-css">
.partners {
    display: flex;
    flex-direction: row;
    padding-top: 50px;
    padding-bottom: 50px;
    overflow-x: hidden;
    img {
        width: 100%;
        padding: 0 20px;
        max-height: 70px;
        width: auto !important;
        filter: grayscale(1);
    }
    img:hover {
        filter: grayscale(0);
    }
}
                    </code></pre>
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <button class="pill-button sass-color">CSS/SASS</button>
                    </ul>
                    <p>This code is used for images inside a track in the case study section of the Netmatters homepage mirror.</p>
                    <p>The code adds a greyscale effect to images and styles the images to fit correctly inside the track and removes any overflow from the page. I used this code to give the images the correct styling needed and to make sure the images do not cause viewport errors with overflow</p>
                </div>

                <div class="coding-example-subcontainer-1">
                    <h1>JavaScript array coding example</h1>
                    <pre class="coding-img-1"><code class="language-js">
function displayMessage(message, type) {
  const alertBox = $('#alert-box');
  alertBox.text(message);  // Set the message text

  // Set the class based on success or error
  if (type === "error") {
    alertBox.removeClass("success").addClass("error");
  } else if (type === "success") {
    alertBox.removeClass("error").addClass("success");
  }

  alertBox.show();  // Show the alert box
  setTimeout(() => {
    alertBox.fadeOut();  // Fade out the alert box after 3 seconds
  }, 3000);
}
                    </code></pre>
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <button class="pill-button javascript-color">JavaScript/jQuery</button>
                    </ul>
                    <p>This code is used for the alert box present in the JavaScript array project.</p>
                    <p>This JavaScript function displays messages in the alert box present in the projects HTML. It has an if statement to check if the alert box should display an "error" or "success" message when a function is performed successfully</p>
                </div>

                <div class="coding-example-subcontainer-1">
                    <h1>Laravel fake admin system coding example</h1>
                    <pre class="coding-img-1"><code class="language-php">
Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
                    </code></pre>
                    <ul class="project-languages">
                        <li>Language(s) used</li>
                        <button class="pill-button php-color">PHP</button>
                        <button class="pill-button laravel-color">Laravel</button>
                    </ul>
                    <p>This code is used for the routes file within my Laravel system admin Project.</p>
                    <p>The code above deals routes handling for my Laravel system admin project. It handles middleware and authentification, if a user does not have autheticificaton they are redirected to the login screen.</p>
                </div>
            </div>
        </main>

        <footer>
            <?php include ('inc/footer.php'); ?>
        </footer>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
        <script src="https://kit.fontawesome.com/c6f1d57b66.js" crossorigin="anonymous"></script>
    </body>


</html>