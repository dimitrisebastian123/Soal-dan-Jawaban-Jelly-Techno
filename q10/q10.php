<?php

function counts($arr, $data)
{
    $counting = 0;
    foreach ($arr as $key => $value) {
        if ($value == $data) {
            $counting++;
        }
    }
    return $counting;
}

$data = ['Miaw', 'miaw', 'miaw', 'miaw', 'miaww'];
$cari = 'miaw';
print_r($data);
echo '<br>kata yang di cari : ' . $cari . '<br>';
echo 'jumlah : ' . counts($data, $cari);
