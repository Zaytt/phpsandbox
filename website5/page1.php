<?php 
  if(isset($_POST['submit'])){
    //get username from POST
    $username = htmlentities($_POST['username']);

    //set the cookie lifetime to an hour
    setcookie('username', $username, time()+3600);

    header("Location: page2.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Cookies</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" placeholder="Enter Username">
    <input type="text" name="username" placeholder="Enter username">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
    
</body>
</html>