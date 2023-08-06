<!DOCTYPE html>
<html>
<body>
<?php
$colors = array("red", "blue", "green", "red", "yellow", "blue", "red");

$colorCounts = array_count_values($colors);

echo "Occurrences of each color: ";
print_r($colorCounts);


?>

</body>
</html>
