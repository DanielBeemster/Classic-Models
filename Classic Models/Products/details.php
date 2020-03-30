<?php

$productLine = empty($_GET["productLine"]) ? null : $_GET["productLine"];
include "..\connectdb.php";
include "../Templates/header.php";
$sql = "SELECT * FROM products WHERE productLine = :productLine";

$params = array(
    ":productLine" => $productLine
);

try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
   echo "<table id='tabel'>";
    echo "<tbody>";
    while($row = $sth->fetch()) {
        echo "<tr>";
        echo "<td>"; echo $row['productCode']; echo "</td>";
        echo "<td>"; echo $row['productName']; echo "</td>";
        echo "<td>"; echo $row['productLine']; echo "</td>";
        echo "<td>"; echo $row['productScale']; echo "</td>";
        echo "<td>"; echo $row['productVendor']; echo "</td>";
        echo "<td>"; echo $row['productDescription']; echo "</td>";
        echo "<td>"; echo $row['quantityInStock']; echo "</td>";
        echo "<td>"; echo $row['buyPrice']; echo "</td>";
        echo "<td>"; echo $row['MSRP']; echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
