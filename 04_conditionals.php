<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators -----------  */
//are special characters or symbols that are used to perform operation on statements or operands
      //types
//arithmetic opertaors-are used to carry arithmetic operation eg;+,-,*,/
// $desks=20;
 //$chairs=25;
 //$furniture=$desks+$chairs;
 //echo $furniture;

 /*Logical operators 
       //types
 //and(||)- only tends to execute something if both condition are met
 //or($$)- only tends to execute sthng if either or both condition are met
 //not(!)-refuses the current state
 
Comparion Operator- used to compare
 
 */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

/*$team1=89;
$team2=85;
//if statement
if ($team1>$team2){
echo "team1 is greater than team2 <br>";
}
//if else statement
if ($team1<$team2){
  echo "team1 is greater than team2";
  }else{
    echo "team2 is greater than team1";
  }



  //if else if
  //$age=50;
  //if($age<30){
   // echo "age is less than 30 ";
  //}elseif($age>30 && $age<40){
    //echo "your age is between 30 and 40";
  //}elseif($age>40 && $age<50){
  //echo "your age is between 40 and 50";
  //}else{
    //echo "your age is greater than 50";
 // } 
 //write a simple php code to check  if someone is eligible to vote or not.
 //write a simple php code to check whether a number is positive,negative or a zero
  */

  /*
$age=18;
 if ($age<20){
  echo "vote";
 }else{
  echo "no vote";
 }
*/

 $number= 10;
 if($number>0){
  echo "the number is positive";
 }else if($number<0){
 echo "the number is negative";
 }else{
  echo "the number is zero";
 }
