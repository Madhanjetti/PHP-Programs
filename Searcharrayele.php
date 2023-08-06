<!DOCTYPE html>
<html>
<body>
<?php
$names = array("Alice", "Bob", "Charlie", "David", "Eve");

$searchName = "Charlie";
if (in_array($searchName, $names)) {
    echo $searchName . " is found in the array.<br>";
} else {
    echo $searchName . " is not found in the array.<br>";
}





?>

</body>
</html>
