<?php include('Connection.php'); ?>
<html>
<head>
</head>
<body>
    <?php include('header.php'); ?>
<section class="gerechten">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
        $id_to_delete = $_POST['product_id'];
        $sql_delete = "DELETE FROM producten WHERE id = :id";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id_to_delete);
        $stmt_delete->execute();
    }

$sql = "SELECT * FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


foreach ($result as $key) {
    
    if(array_key_exists('productnaam', $key)) {
        echo '<h1 class="producten">', $key['productnaam'], '<h1>';
     echo '<h1 class="beschrijving">' . $key['beschrijving'] . $key['prijs'] . '<h1>';
        echo '<form method="post" action="">';
                echo '<input type="hidden" name="product_id" value="' . $key['id'] . '">';
                echo '<input type="submit" name="delete_product" value="Verwijderen">';
                echo '</form>';
                echo $key ['img'] ;
                
    }
}

?>
</section>
    <?php include('footer.php') ?>
</body>
</html>
