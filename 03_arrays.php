<?php
/* ----------- Arrrays ----------- */


/*
  An array is a collections of data/items of the same datatype stored at contegious memory location
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//examples of arrays
//simple arrays of numbers
//example of index array



$numbers=[1,2,3,4,5,6,7,8,9,];

//simple arrays of strings
$colors=["red","blue","white","black","orange","pink"];
$colorss="colorless";

//echo $colorss;
//echo $colors[4];

//var_dump($colors);
//print_r($numbers);

//types of arrays
      //associative arrays-allows us to use name keys to identify values

$rangi=[
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '300f'
];
 //echo $rangi['red'];
 //var_dump($rangi);

      //multi-dimensional arrays-used to store data in a table form.

     /* $people= [
        $person1=[
          'firstname'=> 'john',
          'lastname' => 'peter',
          'email' => 'peter@gmail.com'
        ],
        $person2=[
          'firstname'=> 'jane',
          'lastname' => 'watts',
          'email' => 'jane1@gmail.com'
        ],
        $person3=[
          'firstname'=> 'mitch',
          'lastname' => 'tile',
          'email' => 'mitch@gmail.com'
        ],

      ];
    
      echo $people[0]['email'];

/*Skip to content
Using Gmail with screen readers
Enable desktop notifications for Gmail.
   OK  No thanks
Conversations
1.08 GB of 15 GB used
Terms · Privacy · Program Policies
Last account activity: 3 minutes ago
Details
$CountCapt = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
 "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
 "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw") ;

Create a PHP script which displays the capital and country name from the above array $CountCap. Sort the list by the name of the capital.
New Text Document.txt
Displaying New Text Document.txt.*/

$countcap=
array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
 "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
 "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw");
asort ($countcap);

foreach($countcap as $country =>$capital){
  echo "$country = $capital <br>";
}





$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}





