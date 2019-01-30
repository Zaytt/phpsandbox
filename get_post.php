<?php 
  if(isset($_GET['name'])){
    // echo htmlentities($_GET['name']);
  }

  if(isset($_POST['name'])){
    // $name = htmlentities($_POST['name']);
    // echo $name;
  }

  if(isset($_REQUEST['name'])){
    // $name = htmlentities($_REQUEST['name']);
    // echo $name;
  }

  echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>
  <form method="POST" action="get_post.php">
    <div>
      <label for="">Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
</body>
</html>