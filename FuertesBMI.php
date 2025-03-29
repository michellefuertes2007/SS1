<?php
 if (isset($_POST['calculator'])) {
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];

    if (is_numeric($Weight) && is_numeric($Height) && $Height > 0 && $Weight > 0) {
        if ($Height > 10 ) {
            $Height = $Height / 100; 
        }

        $bmi = $Weight / ($Height * $Height);
        $bmiFormatted = number_format($bmi, 2);

  
    if ($bmi < 18.5) {
        $category = "Underweight 
        $risk = "(Low risk)";
    } elseif ($bmi >= 18.9 && $bmi <= 26.9) {
        $category = "Normal range 
         
(Average risk)";
    } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
        $category = "Overweight 
(Mildly increased risk)";
    } elseif ($bmi >= 30.0 && $bmi <= 34.9) {
        $category = "Obese Class 1 (Moderate risk)";
    } elseif ($bmi >= 35.0 && $bmi <= 39.9) {
        $category = "Obese Class 2 
(Severe risk)";
    } else {
        $category = "Obese Class 3 
(Very severe risk)";
    }

    // Return result
    return ["bmi" => round($bmi, 2), "category" => $category];
}

$weight = 70; 
$height = 170; 
$result = calculateBMI($weight, $height);

echo "BMI: " . $result["bmi"] . "<br>";
echo "Category: " . $result["category"];

if ($bmi < 18.5) {
        $category = "Underweight 
        $risk = "(Low risk)";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $category = "Normal range 
(Average risk)";
    } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
        $category = "Overweight 
(Mildly increased risk)";
    } elseif ($bmi >= 30.0 && $bmi <= 34.9) {
        $category = "Obese Class 1 (Moderate risk)";
    } elseif ($bmi >= 35.0 && $bmi <= 39.9) {
        $category = "Obese Class 2 
(Severe risk)";
    } else {
        $category = "Obese Class 3 
(Very severe risk)";
    }

    // Return result
    return ["bmi" => round($bmi, 2), "category" => $category];
}


?>
