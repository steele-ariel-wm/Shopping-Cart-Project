<?php
include_once "connect.php";


$stmt = $dbh->prepare("SELECT * FROM products p WHERE p.productsId = :productsId");
$stmt->execute(array(':productsId'=>$_GET['productsId']));
$results = $stmt->fetchAll();
?>



<?php
foreach($results as $product){

    echo "<p>" . $product['productsName'] . "</p>";
    echo $product['productsPrice'];
}
?>

