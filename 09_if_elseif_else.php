<?php
//https://php.net/date
$t = date("H");

echo $t;

if ($t < "10") {
    echo "Have a good morning!";
} else if ($t < "12") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>