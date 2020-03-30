<?php
include("../connectdb.php");
function show_table($tn){
    global $db;
    $sql = "SELECT * FROM $tn";
    $cn = getColumnNames($tn);

    try {
        $sth = $db->prepare($sql);
        $sth->execute();
        echo "<table id='tabel'>";
        echo "<tbody>";

        echo "<tr>";
        for($i = 0; $i < count($cn); $i++){
            echo "<td>" . ($cn[$i][0]) . "</td>";
        }
        echo "<td>action</td>";
        echo "</tr>";

        while($row = $sth->fetch())
        {
            echo "<tr>";
            for($i = 0; $i < count($cn); $i++){
                $cnNow = $cn[$i][0];
                $data = $row[$cnNow];
                echo "<td>$data</td>";
            }
            echo "<td><a href='update.php'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getColumnNames($tn){
    global $db;
    $sql = "DESCRIBE $tn";
    $sth = $db->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}


