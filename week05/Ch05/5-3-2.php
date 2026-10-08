# SID: C113181121<BR>
# Name: Po-Chen,Kuo<BR>
EX03
<?php
$result = 0;
$n = 0;
while ($result <= 10) {
    $result = $result * $n;
    echo "|" . $result;
    $n = $n + 1;
    echo "|" . $n;
    $result++;
}
$n = $n - 1;
echo "result: " . $result;