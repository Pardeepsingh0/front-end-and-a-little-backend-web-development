<p>
	<img src="images.jpg" alt=""></br>
	<P><b>Register now</b></P>
	<form action="
<?php
$to="pardeep.pv080@gmail.com";
$subject="send";
$phone=$_POST['text'];

$Email=$_POST['Email'];
mail($to, $subject, $phone,$Email);
?>" method="POST">
<label>Email:<input type="Email" name="Email"></label><br/>

<label>phone:<input type="text" name="text" ></label><br>
<button><input type="submit" name="submit"></button><br>
</form>
</p>