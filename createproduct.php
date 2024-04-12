<?php

if($_SESSION['rol'] == 'admin'){
?>

<html>
<head>
    <link rel="stylesheet" href="bestel.php/css/style.css" type="text/css" >
</head>
<body>

<?php //include('header.php') ?>

<form action="databasecalls\createproduct.php" method="post">
    <label>Productnaam:</label>
    <input type="text" name="productnaam">
    <br>
    <label>omschrijving:</label>
    <input type="text" name="omschrijving">
    <br>
    <label>prijs:</label>
    <input type="text" name="prijs">
    <br>
    <label>img url:</label>
    <input type="text" name="img">
    <br>
    <input type="submit">
</form>

<?php //include('footer.php') ?>

</body>

</html>
<?php

} else{
    header('location: bestel.php');
}

?>