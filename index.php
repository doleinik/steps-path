<?php
$matrix = [
    [83, 12, 50, 93, 99],
    [79, 14, 15, 70, 1],
    [32, 68, 6, 59, 87],
    [54, 50, 86, 82, 62],
    [9, 19, 57, 88, 99]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex flex-col gap-[10px]">
    <?php
    for ($i = 0; $i < count($matrix); $i++) {
        echo '<div class="flex justify-center gap-[10px]">';
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo '<span class="item w-[50px] h-[50px] rounded-[100%] bg-slate-800 text-center text-white flex justify-center items-center cursor-pointer" 
            data-number="' . ($i + 1) . '/' . ($j + 1) . '">'
                . $matrix[$i][$j] .
                '</span>';
        }
        echo '</div>';
    }
    ?>
</div>
<div id="steps" class="text-center">

    <script src="script.js"></script>
</body>
</html>