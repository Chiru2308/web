<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers</title>

    <style>
        body {
            font-family: Arial;
            background: #f4ecf7;
            padding: 30px;
        }
        .container {
            width: 350px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px #aaa;
        }
        h2 {
            text-align: center;
            color: #76448a;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #884ea0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .result {
            background: #e8daef;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Prime Number Finder</h2>

    <form method="post">
        <label>Enter First Number:</label>
        <input type="number" name="n1" required>

        <label>Enter Second Number:</label>
        <input type="number" name="n2" required>

        <input type="submit" name="submit" value="Find Primes">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        if ($n1 > $n2) {
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }

        echo "<div class='result'>";
        echo "<h3>Prime Numbers</h3>";

        for ($i = max(2, $n1); $i <= $n2; $i++) {
            $prime = true;

            for ($j = 2; $j * $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $prime = false;
                    break;
                }
            }

            if ($prime) {
                echo $i . " ";
            }
        }

        echo "</div>";
    }
    ?>
</div>

</body>
</html>