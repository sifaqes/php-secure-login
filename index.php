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
        <!-- <link href="styles/bootstrap.min.css" rel="stylesheet" > -->
        <link href="styles/main.css" rel="stylesheet" />
        <!-- <link href="styles/signin.css" rel="stylesheet" > -->
        <link rel="stylesheet" href="styles/background.css">


        <!-- Java  Script -->
        <script src="js/sha512.js" type="text/JavaScript" ></script> 
        <script src="js/forms.js" type="text/JavaScript" ></script> 
        <script src="js/bootstrap.bundle.min.js" type="text/JavaScript"></script>


    </head>

    <body class="container">
<div class="center">
    

    <div class="bubbles">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>  
            <span style="--i:24;"></span>  
            <span style="--i:10;"></span>  
            <span style="--i:14;"></span>  
            <span style="--i:23;"></span>  
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span> 
            <span style="--i:22;"></span>
            <span style="--i:25;"></span> 
            <span style="--i:18;"></span> 
            <span style="--i:21;"></span>
            <span style="--i:25;"></span> 
            <span style="--i:15;"></span> 
            <span style="--i:13;"></span> 
            <span style="--i:26;"></span>
            <span style="--i:17;"></span> 
            <span style="--i:20;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>  
            <span style="--i:24;"></span>  
            <span style="--i:10;"></span>  
            <span style="--i:14;"></span>  
            <span style="--i:23;"></span> 
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span> 
            <span style="--i:22;"></span>
            <span style="--i:13;"></span> 
            <span style="--i:18;"></span> 
            <span style="--i:21;"></span> 
            <span style="--i:15;"></span> 
            <span style="--i:13;"></span> 
            <span style="--i:26;"></span>
            <span style="--i:17;"></span> 
            <span style="--i:13;"></span> 
            <span style="--i:20;"></span> 
            <span style="--i:20;"></span> 
        </div> 

        <main class="form-signin w-100 m-auto">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error" >Error Logging In!</p>';
        }
        ?> 
        
        <form action="includes/process_login.php" method="post" name="login_form"> 	
        <div style="opacity: 0.9;">
            <img class="mb-4" src="brand/bootstrap-logo.svg" alt="" width="72" height="57" >
            <h1 class="h3 mb-3 fw-normal" >Please sign in</h1>    
        </div>


            <div class="form-floating">
                <input class="form-control" type="text" name="email" placeholder="Email address" />
            </div>


            <div class="form-floating">
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" />  

            </div>
            
            <input class="w-100 btn btn-lg btn-primary"
                    type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" />   
        </form>  
        <div style="opacity: 0.9;">
            <p>If you don't have a login, please <a href="register.php">register</a></p>
            <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
            <p>You are currently logged <?php echo $logged ?>.</p>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 - Licencia gnu.org copia de sifaqes</p>    
        </div>      

        </main>
</div>
    </body>
</html>
