<?php
$sql = "UPDATE productlines SET productLine = :productLine, textDescription = :textDescription
WHERE id = :id";

$params = array(
":productLine" => $productLine,
"textDescription" => $textDescription
);

$sth = $db->prepare($sql);
$sth->execute($params);
?>