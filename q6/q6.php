<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" min="1" name="angka">
        <button type="submit" name="submit">OK</button>
    </form>
</body>

</html>

<?php
function Fibonacci($number)
{
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number - 1) +
            Fibonacci($number - 2));
}

if (isset($_POST['submit'])) {

    $number = $_POST['angka'];
    for ($counter = 0; $counter < $number; $counter++) {
        echo Fibonacci($counter), ' ';
    }
}

?>