<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World Tour</title>
<!-- <?php
   ob_start();
   session_start();
?> -->

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
  
     
      <link href = "main.css" rel = "stylesheet">
      
      
   </head>
	
   <body>
      
      <h2>Welcome to World Tour</h2> 
      <h4>Login to see the latest tour date info</h4>
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Enter Username Here" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Enter Password Here" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "componenets/logout.php" tite = "Logout">Session.
         
      </div> 

	
</body>
</html>