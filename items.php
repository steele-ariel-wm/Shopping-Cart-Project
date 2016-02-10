<?php
include_once "connect.php";

if($_POST['addtocart'] && $_POST['productsId']){
    $_SESSION['cart'][] = array(
        'productId'=>$_POST['productsId'],
        'productName'=>$_POST['productsName'],
        'productsPrice'=>$_POST['productsPrice'] );
}

$stmt = $dbh->prepare("SELECT * FROM products p WHERE p.productsId = :productsId");
$stmt->execute(array(':productsId'=>$_GET['productsId']));
$results = $stmt->fetchAll();
?>


<form method="post">
<?php
foreach($results as $product){

    echo "<p>" . $product['productsName'] . "</p>";
    echo $product['productsPrice'];
    ?>
    <input type="hidden" value="<?php echo $product['productsId']; ?>" name="productsId">
    <input type="hidden" value="<?php echo $product['productsName']; ?>" name="productsName">
    <input type="hidden" value="<?php echo $product['productsPrice']; ?>" name="productsPrice">
    <input type="submit" name="addtocart" value="Add to cart">
    <?php
}
?>
</form>