<?php 
  $people[] = 'Ana';
  $people[] = 'Andres';
  $people[] = 'Beto';
  $people[] = 'Carlos';
  $people[] = 'Diana';
  $people[] = 'Diego';
  $people[] = 'Ernesto';
  $people[] = 'Fernando';
  $people[] = 'Gustavo';
  $people[] = 'Heidi';
  $people[] = 'Ivan';
  $people[] = 'James';
  $people[] = 'Julio';
  $people[] = 'Karla';
  $people[] = 'Kendra';
  $people[] = 'Luisa';
  $people[] = 'Mario';
  $people[] = 'Nancy';
  $people[] = 'Oscar';
  $people[] = 'Pedro';
  $people[] = 'Pepe';
  $people[] = 'Quique';
  $people[] = 'Roberto';
  $people[] = 'Sandra';
  $people[] = 'Tania';
  $people[] = 'Ulrick';
  $people[] = 'Vanessa';
  $people[] = 'Vera';
  $people[] = 'Wenceslao';
  $people[] = 'Xiomara';
  $people[] = 'Yalitzia';
  $people[] = 'Zeferino';

  // Get query string
  $q = $_REQUEST['q'];
  $suggestion = '';

  // Get suggestions
  if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person){
      if(stristr($q, substr($person, 0, $len))){
        if($suggestion === ''){
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo $suggestion === "" ? "No suggestion" : $suggestion;

?>