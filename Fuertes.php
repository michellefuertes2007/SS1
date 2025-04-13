<!DOCTYPE html>
<html>
    <head>
        <title>Sum of Reciprocals</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }

            form {
                background: #fff;
                padding: 1rem;
                border-radius: 8px;
                width: 300px;
                margin: auto;
            }

            input[type="submit"] {
                background-color: #28a745;
                color: white;
                border: none;
                padding: 0.5rem;
                cursor: pointer;
            }

        </style>
    </head>

</head>
<body>
    <h2>Sum of the Reciprocals</h2>
    <form action="reciprocal_sum.php" method="post">
        Enter N: <input type="number" name="n" min="1" required>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["n"]);
    $i = 1;
    $sum = 0.0;

    while ($i <= $n) {
        $sum += 1.0 / $i;
        $i++;
    }

    echo "<h3>Enter N: $n</h3>";
    echo "<h3>Sum is: $sum</h3>";
}

?>
