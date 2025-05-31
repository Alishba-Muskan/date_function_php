<?php


echo "----------------------------Non parametrized function<br><br>";

function printName(){
    echo "Muskan<br>";
}

printName();

echo "----------------------------parametrized function<br><br>";

function addition($num1,$num2){
    echo "$num1 + $num2 = ". $num1 + $num2. '<br>';
}

addition(3,5);



echo "----------------------------default parametrized function<br><br>";

function greeting($name = "Guys"){
    echo "hello ". $name . '<br>';
}

greeting();

echo "---------------------------- Return value function<br><br>";

function addition1( $num1, $num2){
    return $num1 * $num2;
}

$data = addition1(4,5);
echo $result = $data + 20 ;
echo "<br>";

echo "---------------------------- Recursive function<br><br>";

function printname1($name, $count){
    if($count > 0 ){
        echo $name . '<br>';
        printname1($name, $count - 1);
    }
}

printname1("Muskan", 3);
?>