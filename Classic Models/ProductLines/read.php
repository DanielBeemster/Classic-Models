<?php

$productLine = empty($_GET["productLine"]) ? null : $_GET["productLine"];
include "connectdb.php";
$sql = "SELECT * FROM productlines WHERE productLine = :productLine AND textDescription = :textDescription";

$params = array(
    ":productLine" => $productLine
    ":textDescription" => $textDescription
);

try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
    $productLine = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>