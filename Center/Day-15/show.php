<?php 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['psw'];

//echo "<h1> Hello Mr. ".$name." || Your Phone Number is: ".$phone."<h1>";

echo "<table border='2px' cellpadding='4px' cellspacing='2px'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Age</th>
<th>Password</th>
</tr>
<tr>
<td>$name</td>
<td>$phone</td>
<td>$email</td>
<td>$age</td>
<td>$password</td>
</tr>
</table>";









?>