<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>

    <style>
        body {
            font-family: Arial;
            background: #eaf2f8;
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
            color: #21618c;
        }
        label {
            display: block;
            margin-top: 12px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: #2874a6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .result {
            background: #d5f5e3;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Customer Registration</h2>

    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);

        if ($name == "") {
            echo "<p class='error'>Name is mandatory</p>";
        } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
            echo "<p class='error'>Enter a 10-digit phone number</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>Invalid email address</p>";
        } else {
            echo "<div class='result'>";
            echo "<h2>Customer Details</h2>";
            echo "Name: " . htmlspecialchars($name) . "<br><br>";
            echo "Phone: " . htmlspecialchars($phone) . "<br><br>";
            echo "Email: " . htmlspecialchars($email);
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>