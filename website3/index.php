<?php 
  $msg = "";
  $msgClass = "";
  //Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    //Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check required fields
    if(!empty($name) && !empty($email) && !empty($message) ){
      // Passed
      // Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // Failled email filter
        $msg = "Please provide a valid email";
        $msgClass = "alert-danger";
      } else {
        //Email details
        $toEmail = 'ivan_chavez_e@hotmail.com';
        $subject = "Contact request from $name";
        $body = "<h2>Contact Request</h2>
                <h4>Name</h4><p>$name</p>
                <h4>Email</h4><p>$email</p>
                <h4>Message</h4><p>$message</p>";
        //Email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

        //Additional headers
        $headers .= "From: ".$name." <".$email.">". "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          //Email sent
          $msg = "Your message has been sent";
          $msgClass = "alert-success";
        } else {
          $msg = "There was an error while sending your message. Please try again.";
          $msgClass = "alert-danger";
        }
        
      }
    } else {
      // Failed
      $msg = "Please fill in all the fields";
      $msgClass = "alert-danger";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/4/darkly/bootstrap.min.css" />
  <script src="main.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass;?>"><?php echo $msg; ?></div>
    <?php endif ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';?>">
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message : '';?>">
      </div>
      <br>
      <Button type="submit" name="submit" class="btn btn-primary">Submit</Button>
      
    </form>  
  </div>
</body>
</html>