<?php 

  if(count($_COOKIE) > 0){
    echo 'There are '.count($_COOKIE).' cookies saved'.'<br>';
  } else {
    echo 'There are no cookies saved'.'<br>';
  }
  if(isset($_COOKIE['username'])){
    echo 'username: '.$_COOKIE['username'];
  } else {
    echo 'Username not set';
  }
?>