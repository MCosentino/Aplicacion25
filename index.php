<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="style.css">

    
    
    
  </head>

  <body>

  <div class="form">
    <form method="POST" accion="superficie.php">
    <input type="text" name="altura" placeholder="altura">
    <input type="text" name="ancho" placeholder="ancho">
    <input type="submit">
    </form>
  </div>
  <div>
    <?php 
    include "superficie.php"
    
    ?>
  </div>
    
    
  </body>
</html>
