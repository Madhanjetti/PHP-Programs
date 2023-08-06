<!DOCTYPE html>
<html>
<body>
<?php
$marks = array(85, 92, 78, 65, 90);

$total = array_sum($marks);
$average = $total / count($marks);

echo "Total marks: " . $total . "<br>";
echo "Average marks: " . $average . "<br>";




?>

</body>
</html>
