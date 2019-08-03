<?php
// Polymorphism
// When we start to extend classes, and add functionality to them which wasn’t there previously, and even override existing methods (functions), this is called polymorphism. 

// The basis of polymorphism is Inheritance and overridden methods.

  class UserData{

      public $user;
      public $userId;

      public function __construct($userName, $userId){
        $this->user   = $userName;
        $this->userId = $userId;

      }

      public function display(){
        echo "Username is {$this->user} and userid is {$this->userId}";
      }


    }

  class Admin extends UserData{
     public $level ="Administrator";
     public function display(){
        echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";

    }


  }


$user = "Author";
$id   = "25";
$ur = new UserData($user, $id);
$ur->display();
echo "<br/>";
$admin = new Admin("Admin", "01");
$admin->display();

echo "<br/>";
if($admin instanceof UserData){
  echo "Inherited.";
}
echo "<br/>";
if($admin instanceof admin){
  echo "Inherited.";
}
?>