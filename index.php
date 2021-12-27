<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
    <?php
    include 'products.php';
    foreach ($products as $value){
            
    ?>
        <from action="" method="get"> 
		<div class="sanpham">
		<img src="public/images/<?php echo $value['image'];?>">
		<h1>
            <a href='detail.php?id=<?php echo $value['id'];?>' name="sanpham" >
            <?php echo $value['name'];?></a> 
        </h1>
		<b>Giá: </b> <span class='gia'> <?php echo $value['price'];?> </span><br>
		<p> 
            <?php echo substr($value['desc'],0,80);?>
            <a href='detail.php?id=<?php echo $value['id'];?>' name="sanpham">[...]</a></p>
        </from>
	</div>
    <?php } ?>
</body>
</html>
