<?php
include "../util/TableContainer.php";

$head = array("aa","bb","cc","dd");
$data = array(
    array("a1","b1","c1","d1"),
    array("a2","b2","c2","d2"),
    array("a3","b3","c3","d3")
);

$tableObj = new TableContainer($head,$data);
?>

<html>
    <body>
    <?php
        echo $tableObj->makeTable();
    ?>
    </body>
</html>