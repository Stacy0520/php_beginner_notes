<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

//get array length
$fruits=array('mango','orange','banana','apple','passion','melon','grapes','pineapple','palm','berries');
//echo count($fruits);

//search  element in array
echo in_array('avacado', $fruits);

//adding elements to an array
$fruits[]='guava';
array_push($fruits, 'blueberry','dates','pawpaw','lemon' );
//print_r($fruits);
//removing an element from an array
array_pop($fruits);//function to remove last elemnt in the array

array_shift($fruits);//function to remoe first element in an array

unset($fruits[4]);//removes specific elemnt in an array
print_r($fruits);