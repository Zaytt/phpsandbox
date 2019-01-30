<?php 
  class Person{
    private $name;
    private $email; 
    public static $ageLimit = 40;

    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;

      echo __CLASS__." created: $name : $email".'<br>';
    }

    public function __destruct(){
      echo __CLASS__." destroyed".'<br>';
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email = $email;
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }
  }
  echo "Person age limit: ".Person::$ageLimit.'<br>';
  echo "Person age limit: ".Person::getAgeLimit().'<br>';

  $person1 = new Person("Ivan", "ivanemail@email.com");

  class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
      parent::__construct($name, $email, $balance);
      $this->balance = $balance;
      echo "A new ".__CLASS__." has been created".'<br>';

    }
    public function setBalance($balance){
      $this->balance = $balance;
    }

    public function getBalance(){
      return $this->balance;
    }
  }

  $customer1 = new Customer("Diana", "diana1@email.com", 300);

  echo $customer1->getBalance();

  
?>