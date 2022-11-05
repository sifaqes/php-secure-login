<?php

include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" type="" href="styles/background.css">
    </head>        

    <body class="container ">
        <div class="center">
        <h1>Register with us</h1>
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
        
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
            <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            
        <div>
            
        
        
            <input type='text' name='username' id='username fname'  placeholder="Username"/><br>

            <input type="text" name="email" id="email lname" placeholder="Email" /><br>

        
            
            <input type="password" name="password"  id="password lname" placeholder="Password"/><br>
            <input type="password" name="confirmpwd" id="confirmpwd" placeholder="Password" /><br>

            

            <div class="clearfix">
            <input type="button"   value="Register"   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
                </div>

            </div>
        </form>
        <p>Return to the <a href="index.php">login page</a>.</p>
    </div>         
    </body>
</html>









