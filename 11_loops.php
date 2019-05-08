<?php
//while
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

//do...while
$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//for
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}

//Foreach
$colors = array("red", "green", "blue", "yellow");
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $key => $value) {
    echo "$key : $value <br>";
}
