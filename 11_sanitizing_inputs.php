<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if(isset($_POST['submit'])){
//$name = $_POST['email'];
//$email = $_POST['email'];


//htmlspecialchars()- Convert special characters to HTML entities
//$name = htmlspecialchar($_POST['name']);
//$email = htmlspecialchar($_POST['email']);

//filter_var()-Sanitize data
//$name = filter_var($_POST['$name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//$email = filter_var($_POST['$email'], FILTER_SANITIZE_EMAIL);

//filter_input() - Sanitize inputs

$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);


//FILTER_SANITIZE_STRING - Convet string to string eith only alphanumeric, whitespace, and the following characters _/
//FILTER_SANITIZE_EMAIL -Convert string to a valid email address 
//FILTER_SANITIZE_URL -Convert string to a valid URL
//FILTER_SANITIZE_NUMBER_INT -Convert string to an integer
//FILTER_SANITIZE_NUMBER_FLOAT -Convert string to a float
//FILTER_SANITIZE_FULL_SPECIAL_CHAR - HTML -encode special characters, keeps spaces and most other characters
}?>

<!--Pass data through a form-->
<!--php_self can be used for xss-->
<form actionn="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']

);?>"method="POST">

<div>
  <label>Name:</label>
  <input type="text" name="name">
</div>
<br>
<?php //echo $email;?>
<div>
  <label>Email:</label>
  <input type="email" name="email">
</div>
<br>
<input type="submit" name="submit" value="submit">
</form>
