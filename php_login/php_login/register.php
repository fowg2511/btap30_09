<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type"; charset=UTF-8">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign Up </h2>

        <form method="post" action="register.php" class="form">
          Username: <input type="text" name="username" value="" required>

          Password: <input type="password" name="password" value="" required/>

          <br>Email: <br><input type="email" name="email" value="" required/>

          Phone: <input type="text" name="phone" value="" required/>

          <input type="submit" name="dangky" value="Register"/>
          <?php require 'xuly.php';?>
        </form>
      </div>
    </div>
  </body>
</html>