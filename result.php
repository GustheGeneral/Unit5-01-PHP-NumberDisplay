<?php
//function
function isInteger($value) {
    return filter_var($value, FILTER_VALIDATE_INT) !== false;
}
//If statement and input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minNumber = $_POST['minNumber'];
    $maxNumber = $_POST['maxNumber'];

    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<link rel="stylesheet" href="./css/style.css">';
    echo '<title>Result</title>';
    echo '</head>';
    echo '<body>';
//if statement. Checks if the user-provided minimum and maximum numbers are valid integers
    if (isInteger($minNumber) && isInteger($maxNumber)) {
        $min = (int)$minNumber;
        $max = (int)$maxNumber;
//min to max numbers. adds 1 to the min number until max
        if ($min <= $max) {
            echo "<div id='numberDisplay'>";
            for ($i = $min; $i <= $max; $i++) {
                echo "<p>$i</p>";
            }
            echo "</div>";
        } else { //error message no.1
            echo "<p>Please enter a minimum number less than or equal to the maximum number.</p>";
        }
    } else { //error message no.2
        echo "<p>Please enter valid integer numbers.</p>";
    }

    echo '</body>';
    echo '</html>';
}
?>
