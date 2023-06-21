<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
  //echo <'h3>' .$GET['username']. '</h3>';
  echo '<h3>' .$POST['username']. '</h3>';
}?>
<!--Pass data through link-->
<a href="<?php echo $_SERVER['PHP_SELF'];?>?username=Brad">link</a>

<br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
<div>
  <label>Name:</label>
  <input type="text" name="name">

</div>
<br>
<div>
  <label>password</label>
  <input type="password" name="password">

</div>
<br>
<div>
  <label>submit</label>
  <input type="submit" name="submit" value="submit">

</div>
</form>








