<?php
$num = 4;
$factorial = 1;
for ($x = $num; $x >= 1; $x--) {
    $factorial = $factorial * $x;
}
echo "Bilangan Faktorial dari $num adalah $factorial";
