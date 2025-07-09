<?php

// class student{
//     public $name;
//     public $age;

//     public function sayhello(){
//         echo "Hello! Myself " . $this->name . "And Age is " . $this->age;
//     }
// }


// $stu1 = new student();
// $stu1->name = "Muskan";
// $stu1->age = "20";
// $stu1->sayhello();








// class database{
//     public $dbName;
    
//     public function __destruct(){
//         echo "Connection Close <br>";
//     }

//     public function __construct($n){
//         $this->dbName = $n;
//         echo "Database Connected  " . $this->dbName. "<br>";
//     }

//     public function work(){
//         echo "working........ <br>";
//     }
// }

// $obj = new database("test");
// $obj->work();








// class fruits{
//     public function type(){
//         echo "Type Fruits  <br>";
//     }
// }

// class Apple extends fruits{
//     public function color(){
//         echo "Red  <br>";
//     }
// }

// $obj = new Apple();
// $obj->type();
// $obj->color();







// abstract class phone{
//     abstract public function call();
// }

// class android extends phone{
//     public function call(){
//         echo "Android calling <br>";
//     }
// }

// class iphone extends phone{
//     public function call(){
//         echo "iphone calling <br>";
//     }
// }
// $android = new android();
// $android->call();

// $iphone = new iphone();
// $iphone->call();




class bankaccount{

    private $balance = 0;

    public function setAmount($n){
        $this->balance = $n;
    }

    public function getAmount(){
        return $this->balance;
    }
}


$obj = new bankaccount();
$obj->setAmount(5000);
echo "Balance is : " . $obj->getAmount();


?>