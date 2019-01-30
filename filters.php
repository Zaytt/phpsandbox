<?php 
  // Check for posted data
  // if(filter_has_var(INPUT_POST, 'data')){
  //   echo 'data found';
  // } else {
  //   echo "No data";
  // }

  //Check if posted data and if it's a valid email
  // if(filter_has_var(INPUT_POST, 'data')){
  //   $email = $_POST['data'];

  //   // Remove illegal characters
  //   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
  //   echo $email.'<br>';

  //   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  //     echo "Email is valid";
  //   } else {
  //     echo "Email is not valid";
  //   }
  // }


  // $var = 23;

  // if(filter_var($var, FILTER_VALIDATE_INT)){
  //   echo "$var is a number";
  // } else {
  //   echo "$var is not a number";
  // }

  # PHP SANITIZE FILTERS:

  // FILTER_SANITIZE_EMAIL
  // FILTER_SANITIZE_ENCODED
  // FILTER_SANITIZE_MAGIC_QUOTES
  // FILTER_SANITIZE_NUMBER_FLOAT
  // FILTER_SANITIZE_NUMBER_INT
  // FILTER_SANITIZE_SPECIAL_CHARS
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS
  // FILTER_SANITIZE_STRING
  // FILTER_SANITIZE_STRIPPED
  // FILTER_SANITIZE_URL
  // FILTER_UNSAFE_RAW



  # Arrays of filters
  $filters = array(
    "data"  => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      'filter' => FILTER_VALIDATE_INT,
      'options' => array(
        "min_range" => 0,
        "max_range" => 100
      )
    )
  );

  // print_r(filter_input_array(INPUT_POST, $filters));
  $userArray = [
    "name" => 'ivan chavez escamilla',
    "age" => 29,
    "email" => 'ivanchavezrifa@soylaneta.com'
  ];

  $userArrayFilters = [
    "name" => [
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ],
    "age" => [
      "filter" => FILTER_VALIDATE_INT,
      "options" => [
        "min_range" => 18,
        "max_range" => 123
      ]
    ],
    "email" => FILTER_VALIDATE_EMAIL
  ];

  print_r(filter_var_array($userArray, $userArrayFilters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>