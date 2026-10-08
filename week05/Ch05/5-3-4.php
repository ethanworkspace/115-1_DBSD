# SID: C113181121<BR>
# Name: Po-Chen,Kuo<BR>
EX04
<HR>
<?php
$total = 0;
for ($i = 0; $i <= 15; $i++) {
    if ($i % 2 == 1)
        continue;
    echo "| " . $i;
    $total += $i;
}