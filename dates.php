<?php
  // echo date('h'); // hour
  // echo date('i'); // minute
  // echo date('s'); // seconds
  // echo date('l'); //day of week
  // echo date('d'); //day
  // echo date('m'); //month
  // echo date('y'); //year

  date_default_timezone_set('America/Mexico_City');
  echo date('h:i:s l d/m/y');
  echo '<br>';
  $mybday = mktime(11, 0, 0, 5, 23, 1989);
  echo $mybday.'<br>';

  echo date('d/m/y', $mybday);

?>