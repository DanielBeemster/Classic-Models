<?php
include "connectdb.php";

$voornaam = empty($_POST["productLine"]) ? null : $_POST["productLine"];
$achternaam = empty($_POST["textDescription"]) ? null : $_POST["textDescription"];

$sql = "INSERT INTO productlines (productLine, textDescription) VALUES (:productLine, :textDescription)";
$params = array(":productLine" => $_POST['productLine'], ":textDescription" => $_POST['textDescription']);
$sth = $db->prepare($sql);
$sth->execute($params);


header("Location: index.php");
