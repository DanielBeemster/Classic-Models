<!DOCTYPE html>
<html>
<head>
    <?php  include "classicmodels.php" ?>
</head>    
<body>
<?php
$sql = "SELECT * FROM products"; 
$sth = $db->prepare($sql); 
$sth->execute(); 
?> 
<table class="table"> 
    <thead> 
    <tr> 
        <th>productCode</th> 
        <th>productName</th> 
        <th>productLine</th> 
        <th>productScale</th>
        <th>productVendor</th> 
        <th>productDescription</th> 
        <th>quantityInStock</th> 
        <th>buyPrice</th>
        <th>MSRP</th>  
    </tr> 
    </thead> 
    <tbody> 
    <?php while($row = $sth->fetch()) { ?> 
        <tr> 
            <td><?php echo $row["productCode"]; ?></td> 
            <td><?php echo $row["productName"]; ?></td> 
            <td><?php echo $row["productLine"]; ?></td> 
            <td><?php echo $row["productScale"]; ?></td> 
            <td><?php echo $row["productVendor"]; ?></td> 
            <td><?php echo $row["productDescription"]; ?></td> 
            <td><?php echo $row["quantityInStock"]; ?></td> 
            <td><?php echo $row["buyPrice"]; ?></td>
            <td><?php echo $row["MSRP"]; ?></td>
        </tr> 
    <?php } ?> 
    </tbody> 
</table> 
</body>
</html>