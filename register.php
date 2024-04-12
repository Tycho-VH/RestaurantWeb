<form action="register.php" method="post">
  <label for="username">Username:</label> 
  <input id="username" name="username" required="" type="text" />
  <label for="password">Password:</label>
  <input id="password" name="password" required="" type="password" />
  <input name="register" type="submit" value="Register" />
</form>


<?php

include 'Connection.php';

$username = $_POST['gebruikersnaam'];
$password = $_POST['wachtwoord'];

$sql = "
INSERT INTO users (gebruikersnaam, wachtwoord ) 
VALUES ('$username', '$password')";

$conn->exec($sql);
?>