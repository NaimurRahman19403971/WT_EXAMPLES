<?php
include('../Lab exam/CV.php');
session_start(); 


?>
    
<!DOCTYPE html>
<html>
<body>

<h2>page2.php</h2>

<form action="" method="post">
<label for="University"> University:</label>
    <input type="text" name="University"  required><br>
    <label for="Degree">Degree:</label>
    <input type="text" name="degree"  required><br>
    <label for="Major">Major:</label>
    <input type="text" name="Major"  required><br>
    <label for="Results">Results:</label>
    <input type="number" name="Results"  required><br>
    <label for="Passing Year">Passing Year:</label>
    <input type="datetime-local" name="Passing Year"  required><br>
    <input type="submit"    value="submit" 
    

</form>


<?php


$connection = new CV();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"employee",$username,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);





?>


</body>
</html>