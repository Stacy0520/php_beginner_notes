<?php

/* -------- Loops & Iteration ------- 
loop is a conditonal statement that repeats ifself until a certai conditon is */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
$value=1;
while($value<=5){
  echo "increment number :$value<br>" ;
  $value ++;
  
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$number=10;
do{
  echo "increment number :$number<br>" ;
  $number ++;
}while($number<=20);
 


/*  for loop
for loop - used when you know in advance how many times the script should run.
-allows the user to put all the loops related statements that is (initialization;condition/test; ++/--)
*/

for($count=1; $count <=5; $count ++){
  echo "number is: $count"; 

}

/*---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

