<?php
/* Ques 1: Write a PHP program to enter marks of five subjects Physics, Chemistry, 
Biology, Mathematics and Computer, calculate percentage and grade by if 
else write a PHP program for find „Thursday‟ in week using switch 
Function.*/ 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Percentage and Grade Calculation</title>
</head>
<body>
    <form method="POST">
        <label for="physics">chemistry:</label>
        <input type="number"  name="Chemistry" id="physics" required><br>

        <label for="chemistry">Physics:</label>
        <input type="number" name="Physics" id="chemistry" required><br>

        <label for="biology">Mathematics:</label>
        <input type="number" name="Mathematics" id="biology" required><br>

        <label for="mathematics">Biology:</label>
        <input type="number" name="Biology" id="mathematics" required><br>

        <label for="computer">Computer:</label>
        <input type="number" name="Computer" id="computer" required><br>

        <input type="submit" value="Calculate Percentage and Grade">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Chemistry = $_POST['Chemistry'];
        $Physics = $_POST['Physics'];
        $Mathematics = $_POST['Mathematics'];
        $Biology = $_POST['Biology'];
        $Computer = $_POST['Computer'];

        $totalMarks = $Chemistry + $Physics + $Mathematics + $Biology +  $Computer;
        $percentage = ($totalMarks / 500) * 100;

        $grade = '';
        if ($percentage >= 90) {
            $grade = 'A+';
        } elseif ($percentage >= 80) {
            $grade = 'A';
        } elseif ($percentage >= 70) {
            $grade = 'B';
        } elseif ($percentage >= 60) {
            $grade = 'C';
        } elseif ($percentage >= 50) {
            $grade = 'D';
        } else {
            $grade = 'Fail';
        }
        echo "Grade is: $grade";
        echo "Percentage is: $percentage% <br>";
        echo "Total Marks is: $totalMarks <br>";
    }
    echo "<br>";
    $day = "Thursday";

switch ($day) {
    case "Monday":
        echo "Monday is not Thursday.";
        break;
    case "Tuesday":
        echo "Tuesday is not Thursday.";
        break;
    case "Wednesday":
        echo "Wednesday is not Thursday.";
        break;
    case "Thursday":
        echo "Thursday is found!";
        break;
    case "Friday":
        echo "Friday is not Thursday.";
        break;
    case "Saturday":
        echo "Saturday is not Thursday.";
        break;
    case "Sunday":
        echo "Sunday is not Thursday.";
        break;
    default:
        echo "Invalid day.";
}
    ?>
</body>
</html>
