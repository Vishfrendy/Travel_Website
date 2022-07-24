<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>vfTravels - Explore Destinations And Things To Do</title>
        <link rel="stylesheet" href="css/LogIn.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>

    <body>
        <div class="main">
            <section class="login">
                <div class="container">
                    <div class="login-content">
                        <div class="login-image">
                            <figure><img src="images/login-image.jpg" alt="sing up image"></figure>
                            <a href="SignUp.php" class="signup-image-link">Create an account</a>
                        </div>

                        <div class="login-form">
                            <h2 class="form-title">Log In</h2>
                            <form method="POST" class="register-form" id="login-form">
                                <div class="form-group">
                                    <label for="your_name"><i class="fas fa-user-alt"></i></label>
                                    <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="fas fa-eye-slash"></i></label>
                                    <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="login" id="login" class="form-submit" value="Log in"/>
                                </div>
                            </form>
                            <div class="social-login">
                                <span class="social-label">Or login with:</span>
                                <ul class="socials">
                                    <li><a href="#"><i class='fab fa-facebook-square'></i></i></a></li>
                                    <li><a href="#"><i class='fab fa-twitter'></i></a></li>
                                    <li><a href="#"><i class='fab fa-google'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>