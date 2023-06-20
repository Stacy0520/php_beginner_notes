<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
types
built-in
user-defined-

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function hellomessage(){
echo "this is a message<br>";
}
hellomessage();

function addingfunction($num1, $num2){
  $sum=$num1 + $num2;
  echo "print $sum <br>";
}
addingfunction(50,20);

function myName($fname,$lname){
  $myNames=$fname.$lname;
  echo " print $myNames";
}
myName("stacy", "monica");


function subtractfunction($num1, $num2){
  $subtraction=$num1-$num2;
  echo "print $subtraction";
}
subtractfunction(40,20);


function multiplyfunction($num1, $num2){
  $multiply=$num1*$num2;
  echo "print $multiply";
}
multiplyfunction(34,2
);
