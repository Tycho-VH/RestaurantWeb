<?php

include 'Connection.php';

$user = $_POST['gebruikersnaam'];
$user = $_POST['wachtwoord'];

$sql = "
    INSERT INTO users (gebruikersnaam, wachtwoord)
    VALUES ('$user','$pass')";

$conn->exec($sql);