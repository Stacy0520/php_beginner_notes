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
var_dump($fruits);