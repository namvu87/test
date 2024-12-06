<?php
function isPowerOfTwo($n) {
    // Số mũ của 2 phải là số nguyên dương
    if ($n <= 0) {
        return false;
    }

    // Kiểm tra bằng toán tử bitwise
    return ($n & ($n - 1)) === 0;
}

function solution($arr)
{
    $n = count($arr);
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
           if (isPowerOfTwo($arr[$i] + $arr[$j])) {
               $count +=1;
           }
        }
    }

    return $count;
}


// Test cases
$numbers1 = [1, -1, 2, 3];
$numbers2 = [2];
$numbers3 = [-2, -1, 0, 1, 2];
$numbers4 = 	[10, -200, 200];
$numbers5 = [500, -10000, 10000];

$numbers6 = [1000, -20000, 20000];
$numbers7 = [10000, -20000, 20000];
$numbers8 =  [10000, -1000000, 1000000];

echo "Test case 1: " . solution($numbers1) . "\n"; 
echo "Test case 2: " . solution($numbers2) . "\n"; 
echo "Test case 3: " . solution($numbers3) . "\n"; 

echo "Test case 4: " . solution($numbers4) . "\n"; 
echo "Test case 5: " . solution($numbers5) . "\n"; 
echo "Test case 6: " . solution($numbers6) . "\n"; 

echo "Test case 7: " . solution($numbers7) . "\n"; 
echo "Test case 8: " . solution($numbers8) . "\n"; 
 


?>

?>