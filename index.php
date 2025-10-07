<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Tasks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<h1>PHP BASIC EXERCISES</h1>";

    $name = "Arevalo, Elizar Jay";
    $age = 20;
    $color = "Violet";
    echo "<section><h2>1. Introduce Yourself</h2>";
    echo "<p>Hi! I’m $name, I am $age years old, and my favorite color is $color.</p></section>";

    $a = 10;
    $b = 3;
    $sum = $a + $b;
    $diff = $a - $b;
    $prod = $a * $b;
    $quot = $a / $b;

    echo "<section><h2>2. Simple Math</h2>";
    echo "<p>Sum: $sum</p>";
    echo "<p>Difference: $diff</p>";
    echo "<p>Product: $prod</p>";
    echo "<p>Quotient: $quot</p></section>";

    $length = 5;
    $width = 8;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "<section><h2>3. Area and Perimeter of a Rectangle</h2>";
    echo "<p>Area: $area</p>";
    echo "<p>Perimeter: $perimeter</p></section>";

    $celsius = 30;
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "<section><h2>4. Temperature Converter</h2>";
    echo "<p>$celsius = $fahrenheit</p></section>";

  
    $x = 5;
    $y = 10;
    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "<section><h2>5. Swapping Variables</h2>";
    echo "<p>After swapping: x = $x, y = $y</p></section>";

 
    $basic_salary = 15000;
    $allowance = 5000;
    $deduction = 2000;
    $net_salary = $basic_salary + $allowance - $deduction;

    echo "<section><h2>6. Salary Calculator</h2>";
    echo "<p>Net Salary: ₱$net_salary</p></section>";

   
    $weight = 68; 
    $height = 1.75; 
    $bmi = $weight / ($height * $height);

    echo "<section><h2>7. BMI Calculator</h2>";
    echo "<p>Your BMI is: " . number_format($bmi, 2) . "</p></section>";


    $sentence = "Learning PHP is fun and rewarding!";
    $length = strlen($sentence);
    $wordCount = str_word_count($sentence);
    $upper = strtoupper($sentence);
    $lower = strtolower($sentence);

    echo "<section><h2>8. String Manipulation</h2>";
    echo "<p>Sentence: $sentence</p>";
    echo "<p>Number of characters: $length</p>";
    echo "<p>Number of words: $wordCount</p>";
    echo "<p>Uppercase: $upper</p>";
    echo "<p>Lowercase: $lower</p></section>";

   
    $balance = 10000;
    $deposit = 2500;
    $withdraw = 1500;
    $balance = $balance + $deposit - $withdraw;

    echo "<section><h2>9. Bank Account Simulation</h2>";
    echo "<p>Final Balance: ₱$balance</p></section>";

    
    $math = 92;
    $english = 85;
    $science = 88;
    $average = ($math + $english + $science) / 3;

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } else {
        $grade = "F";
    }

    echo "<section><h2>10. Simple Grading System</h2>";
    echo "<p>Average: " . number_format($average, 2) . "</p>";
    echo "<p>Grade: $grade</p></section>";

    
    $php_amount = 1000;
    $usd_rate = 0.018;
    $eur_rate = 0.016;
    $jpy_rate = 2.63;
    $usd = $php_amount * $usd_rate;
    $eur = $php_amount * $eur_rate;
    $jpy = $php_amount * $jpy_rate;

    echo "<section><h2>11. Currency Converter</h2>";
    echo "<p>PHP $php_amount = USD " . number_format($usd, 2) . "</p>";
    echo "<p>PHP $php_amount = EUR " . number_format($eur, 2) . "</p>";
    echo "<p>PHP $php_amount = JPY " . number_format($jpy, 2) . "</p></section>";

   
    $distance = 200;
    $fuel_consumption = 12; 
    $fuel_price = 70; 
    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;

    echo "<section><h2>12. Travel Cost Estimator</h2>";
    echo "<p>Distance: $distance km</p>";
    echo "<p>Fuel Needed: " . number_format($fuel_needed, 2) . " liters</p>";
    echo "<p>Estimated Travel Cost: ₱" . number_format($travel_cost, 2) . "</p></section>";
    ?>
</body>
</html>
