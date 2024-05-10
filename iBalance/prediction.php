<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalValue = 0;
    $experience = 0;
    $hours = 0;

    if (isset($_POST["test1"])) {

        $totalValue += intval($_POST["test1"]);
    }

    if (isset($_POST["test2"])) {

        $totalValue += intval($_POST["test2"]);
    }

    if (isset($_POST["test3"])) {

        $totalValue += intval($_POST["test3"]);
    }
    if (isset($_POST["test4"])) {

        $totalValue += intval($_POST["test4"]);
    }
    if (isset($_POST["test5"])) {

        $totalValue += intval($_POST["test5"]);
    }

    if (isset($_POST["test6"])) {

        $totalValue += intval($_POST["test6"]);
    }
    if (isset($_POST["test7"])) {

        $totalValue += intval($_POST["test7"]);
    }

    if (isset($_POST["test8"])) {

        $totalValue += intval($_POST["test8"]);
    }

    if (isset($_POST["test9"])) {

        $totalValue += intval($_POST["test9"]);
    }

    if (isset($_POST["test10"])) {

        $totalValue += intval($_POST["test10"]);
    }

    if (isset($_POST["experience"])) {

        $experience = intval($_POST["experience"]);
    }
    if (isset($_POST["hours"])) {

        $hours = intval($_POST["hours"]);
    }
 
    $output = shell_exec("C:/Users/Acer/anaconda3/envs/ForReal/python.exe D:/XAMPP/htdocs/code/predictor.py $totalValue $experience $hours");
    $inted_output = intval($output);
    header("Location: hasil.php?output=$inted_output");
} else {
    header("test.php");
    exit();
}

