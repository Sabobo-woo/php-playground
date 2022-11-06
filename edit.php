<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .board .row {

    width: 24em;

    display: flex;

}

.board .row > div {

    width: 3em;

    height: 3em;

}

.board .white {

    background-color: #c2c2c2;

}

.board .black {

    background-color: #525252;

}
        </style>

    <div class="board">
<?php
  $value = 0;
    for($row=1;$row<=8;$row++) {
         echo '<div class="row">';
   
    for($column=1;$column<=8;$column++) {
        $value=$row+$column;
        if($value%2 == 0) {
            echo '<div class="black"></div>';
        } else {
            echo '<div class="white"></div>';
        }
    }
 echo '</div>';
        }

echo '<hr>';

$positions = [

    1 => [
        8 => 'r', // black rook standing in position 1-8 (A8)
        7 => 'p', 
        2 => 'P', // white pawn standing in position 1-2 (A2)
        1 => 'R'
    ],

    2 => [
        8 => 'n', 
        7 => 'p', 
        2 => 'P', 
        1 => 'N'
    ],

    3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
    5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
    6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
]



    ?>


</div>
</body>
</html>