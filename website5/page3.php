<?php 
  $user = [
    'name' => "Ivan Chavez",
    'email' => "ivan@email.com",
    'age' => 29
  ];

  $user = serialize($user);

  setcookie('user', $user, time()+3600);

  $user = unserialize($_COOKIE['user']);

  print_r($user);
  
?>