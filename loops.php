<?php 
#Loops
/* 
  For
  While
  Do While
  ForEach
*/


for($i = 0; $i<10; $i++){
  echo $i;
}

$j = 0;
while ($j < 10){
  echo $j;
  echo '<br>';
  $j++;
}

$planes = ['Spitfire', 'Hurricane', 'Typhon', 'Tempest', 'Sea Fury'];

echo 'British planes:'.'<br>';
foreach($planes as $plane){
  echo $plane;
  echo '<br>';
}
?>