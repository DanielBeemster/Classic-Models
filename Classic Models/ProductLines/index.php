<!DOCTYPE html>
<ul>
<?php
include "connectdb.php";

$sql = "SELECT * FROM productlines";
$sth = $db->prepare($sql); 
$sth->execute();

while($row = $sth->fetch()) { 
echo "<li>";
echo  "<a href='Products/details.php?productLine=" . $row["productLine"] . "'>" . $row['productLine'] . "</a>";
echo "</li>";
}
?>
</ul>
</html>