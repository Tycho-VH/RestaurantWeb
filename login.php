<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input id="username" name="username" required="" type="text" />
    <label for="password">Password:</label> <input id="password" name="password" required="" type="password" />
    <input name="login" type="submit" value="Login" />
</form>

<?php
include 'Connection.php';
$stmt = $conn->prepare(
    "SELECT * FROM users WHERE gebruikersnaam = :gebruikersnaam AND wachtwoord = :password");

$stmt->bindParam(':gebruikersnaam', $_POST['gebruikersnaam']);
$stmt->bindParam(':password' , $_POST['wachtwoord']);
$result = $stmt->execute();

$data = $stmt->fetch();
var_dump($data);
var_dump($result);
if(isset($result)){
 session_start();
    $_SESSION['username'] = $data['gebruikersnaam'];
     $_SESSION['rol'] = $data['rol'];
}
foreach($user == 'username' && $password == 'wachtwoord'){
    

    if($_SESSION['rol'] == 'admin')
    include'createproduct.php':
}else{
    include'index.php';
}

else{
    echo 'niet';
}
?>
