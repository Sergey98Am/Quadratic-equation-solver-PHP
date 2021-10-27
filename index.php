<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equation Solver</title>
</head>
<body>
<h2>Quadratic Equation Solver</h2>
<form method="post" action="">
    <div class="form-group">
        <input type="text" name="a" placeholder="Enter 'a' value"/>
    </div>
    <div class="form-group">
        <input type="text" name="b" placeholder="Enter 'b' value"/>
    </div>
    <div class="form-group">
        <input type="text" name="c" placeholder="Enter 'c' value"/>
    </div>
    <button name="submit" value="Submit">Submit</button>
</form>
</body>
</html>

<style>
    .form-group {
        margin-bottom: 5px;
    }
</style>

<?php
if (isset($_POST['submit'])) {
    function findRoots($a, $b, $c)
    {
        if ($a == 0) {
            echo "Invalid";
            return;
        }
        $x = '';

        $disc = ($b * $b) - (4 * $a * $c);
        echo (-$b + sqrt($disc)) / (2 * $a);
        if ($disc == 0) {
            $x = (-$b + sqrt($disc)) / (2 * $a);
            echo ('The equation has one real roots, x = ' . $x);
        } elseif ($disc > 0) {
            $x1 = (-$b + sqrt($disc)) / (2 * $a);
            $x2 = (-$b - sqrt($disc)) / (2 * $a);
            echo ('The equation has two real roots, x1 = ' . $x1 . ', x2 = ' . $x2);
        } elseif ($disc < 0) {
            echo ('The equation has no real roots, because x = ' . $disc);
        }

//        if ($discriminant > 0) {
//            echo "Roots are real and different ";
//            echo ($b + $sqrt_val) / (2 * $a), ", ",
//                ($b - $sqrt_val) / (2 * $a);
//        } else if ($discriminant == 0) {
//            echo "Roots are real and same ";
//            echo $b / (2 * $a);
//        }
//        // $discriminant < 0
//        else {
//            echo "Has no solution";
//        }
    }

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    findRoots($a, $b, $c);
}
?>