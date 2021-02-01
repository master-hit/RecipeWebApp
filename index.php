<?php require 'config.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> WebApp </title>
        <link rel="stylesheet" href="static/css/style.css">
    </head>
    <body>
        <?php  
        include 'layout/header.php';
        ?>
        <br>
        
        <a href=<?php echo $base_url;?>login.php> Login </a><br>
        <a href=<?php echo $base_url;?>register.php>Register</a><br>
      
  <?php
        echo "<p> This is our main body part </p>";  
        include 'layout/footer.php';
        ?>
    </body>
</html>
