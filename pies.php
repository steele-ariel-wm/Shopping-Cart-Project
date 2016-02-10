<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="pies.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-2.1.4.min%20(1).js"></script>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
// $results = select * from products where category = $_GET['category'];
?>

<div class="overlay8"></div>
<div class="hover-space">
    <header>
        <div class="logo">Desserts Box</div>
        <nav>
            <ul>
                <li><a href="home.html" >Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="brownies.php">Brownies</a></li>
                <li><a href="cakes.php">Cakes</a></li>
                <li><a href="cookies.php">Cookies</a></li>
                <li><a href="chocolates.php">Chocolates</a></li>
                <li><a href="pies.php" class="active">Pies</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </nav>
    </header>
</div>
<center><table id="table1">
        <?php
//        foreach($results as $result){
        ?>
        <tr><td><a href="items.php?productsId=37"><img id="img1" src="https://36.media.tumblr.com/8e56626ab0eee223eb62a173c5d8513b/tumblr_nxxnwizd971tiegzpo1_500.jpg"></a></td>
            <td><a href="items.php?productsId=38"><img id="img2" src="http://www.wellnesswithkristen.com/wp-content/uploads/2015/09/tumblr_mbj8jki5h21rezdjko1_500.jpg"></a></td>
            <td><a href="items.php?productsId=39"><img id="img3" src="http://41.media.tumblr.com/fb86f80eb08e3b4200f7c477e8c305df/tumblr_n7r3qiyo9x1sidp68o2_r1_1280.jpg"></a></td></tr>
        <tr><td><a href="items.php?productsId=40"><img id="img4" src="https://41.media.tumblr.com/6e78f86f18906a4db42d6ccb6bd6ec29/tumblr_nv78e1z6121ts2ep8o1_500.jpg"></a></td>
            <td><a href="items.php?productsId=41"><img id="img5" src="http://40.media.tumblr.com/d6f3050583f14cf826fc9e1c9df3335e/tumblr_inline_nxj1blgDhP1tfs3ai_1280.jpg"></a></td>
            <td><a href="items.php?productsId=42"><img id="img6" src="http://cook.sndimg.com/content/dam/images/cook/fullset/2011/8/30/0/cc-armendariz_maple-pecan-pie-recipe-02_s4x3.jpg/jcr:content/renditions/cq5dam.web.616.462.jpeg"></a></td></tr>
        <tr><td><a href="items.php?productsId=43"><img id="img7" src="https://s-media-cache-ak0.pinimg.com/236x/65/b0/7e/65b07e50b7205175a3b6d349816128e9.jpg"></a></td>
            <td><a href="items.php?productsId=44"><img id="img8" src="https://36.media.tumblr.com/b76f8c89af1057cd05fc531da3ba734c/tumblr_nzi7nnqzUT1sn5m44o1_500.jpg"></a></td>
            <td><a href="items.php?productsId=45"><img id="img9" src="http://40.media.tumblr.com/e37452f96dc8777dc627da913c311fc5/tumblr_inline_nxj1bzUYdD1tfs3ai_1280.jpg"></a></td></tr>
    </table>
<footer>
    <a href="http://dessertsbox.com" target="_blank">dessertsbox.com</a>
    <br/>
</footer>
</body>
</html>