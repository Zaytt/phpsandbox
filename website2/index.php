<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>System Info</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
  <script src="main.js"></script>
</head>
<body>
  <div class="container">
    <h1>Server & File Info</h1>
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class = "list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h1>Client Info</h1>
    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class = "list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  
</body>
</html>