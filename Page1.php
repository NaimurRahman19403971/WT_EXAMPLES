

<?php
session_start();
?>


<!DOCTYPE html>
<html>
<body>

<h2>page1.php</h2>

<form  action="" method="post">

<label for="Username"> Username:</label>
    <input type="text" name="username" placeholder="Enter your username" required><br>
    <label for="password">password:</label>
    <input type="password" name="password" placeholder="Enter your password" required><br>
    <label for="Fullname">Fullname:</label>
    <input type="text" name="Fullname"  required><br>
    <label for="Mobile no">Mobile no:</label>
    <input type="number" name="Mobile no"  required><br>
    <label for="Date of birth">Date of birth:</label>
    <input type="datetime-local" name="Date of birth"  required><br>

    

</form>

<a href="http://localhost/Lab%20exam/Page2.php">
       <button>Next</button>
     </a>
    
    


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "CV";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT* FROM employee";
$result = $conn->query($sql);

$conn->close();
?>



</body>
</html>