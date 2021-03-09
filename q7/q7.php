<?php

function uniqueCharacter($text)
{
    for ($i = 0; $i < strlen($text); $i++) {
        for ($j = $i + 1; $j < strlen($text); $j++) {
            if ($text[$i] == $text[$j]) {
                return false;
            }
        }
    }
    return true;
}

$data = "Jelly Techno";
if (uniqueCharacter($data)) {
    echo "Text $data termasuk uniq karakter";
} else {
    echo "Text $data termasuk duplikat karakter";
}
