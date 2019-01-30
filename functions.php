<?php 
  function simpleFunction(){
    echo 'this is a function';
  }

  function parameterFunction($name = 'Max Power'){
    echo "My name is $name";
    echo '<br>';
  }
  // simpleFunction();

  function addNums($num1, $num2){
    return $num1+$num2;
  }

  $num = 1;
  function addFive($num){
    $num += 5;
  }

  function addTen(&$num){
    $num += 10;
  }

  parameterFunction();
  parameterFunction("Ivan");
  
  // echo addNums(1,2);
  addFive($num);
  echo $num.'<br>';
  addTen($num);
  echo $num;

?>