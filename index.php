<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Licencia gnu.org copia de siphax</title>
        <meta charset="utf-8">
        <!-- CSS only - bootstrap-->
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <link rel="stylesheet" href="styles/signin.css" >

        <!-- Java  Script -->
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <script src="js/bootstrap.bundle.min.js"></script>


            

    </head>
    <body class="text-center">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <main class="form-signin w-100 m-auto">
        <form action="includes/process_login.php" method="post" name="login_form"> 	

            <img class="mb-4" src="brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input class="form-control" type="text" name="email" placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
            </div>


            <div class="form-floating">
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" />  
              <label for="floatingPassword">Password</label>
            </div>
            
            <input class="w-100 btn btn-lg btn-primary"
                    type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" />   
        </form>        
        <p>If you don't have a login, please <a href="register.php">register</a></p>
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 - Licencia gnu.org copia de sifaqes</p>
        </main>
        

    </body>
</html>
