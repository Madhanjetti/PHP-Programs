<!DOCTYPE html>
<html>
<body>
        <?php
function isPalindrome($arr) {
    return $arr === array_reverse($arr);
}

$palindromeCheck = array(1, 2, 3, 2, 1);
if (isPalindrome($palindromeCheck)) {
    echo "The array is a palindrome.";
} else {
    echo "The array is not a palindrome.";
}
?>

</body>
</html>
