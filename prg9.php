<!DOCTYPE html>

<html>
<head>
    <title>Employee Details</title>

```
<style>
    body {
        font-family: Arial;
        background: #eaf2f8;
        padding: 30px;
    }

    .container {
        width: 550px;
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

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #999;
        padding: 12px;
        text-align: center;
    }

    th {
        background: #2874a6;
        color: white;
    }

    tr:nth-child(even) {
        background: #d6eaf8;
    }

    tr:hover {
        background: #aed6f1;
    }
</style>
```

</head>

<body>

<div class="container">

<h2>Employee Details</h2>

<?php
$conn = mysqli_connect("localhost", "root", "", "emp");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM emp";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Salary</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</div>

</body>
</html>
