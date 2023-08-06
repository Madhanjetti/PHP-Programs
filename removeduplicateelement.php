<!DOCTYPE html>
<html>
<body>
<?php
$numbers = array(2, 4, 6, 4, 8, 6, 10, 12);

$uniqueNumbers = array_unique($numbers);

echo "Array after removing duplicates: ";
print_r($uniqueNumbers);

?>

</body>
</html>
