<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px rgba(10, 10, 10, 0.2);
            width: 350px;
            text-align: center;
        }
        .container h1 {
            color: #28a745;
        }
        .data {
            font-size: 18px;
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px; 
        }
        .btn:hover {
            background: rgb(101, 249, 21);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Details</h1>
        <div class="data">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['age'], $_POST['address'], $_POST['course'])) {
                echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
                echo "<p><strong>Age:</strong> " . htmlspecialchars($_POST['age']) . "</p>";
                echo "<p><strong>Address:</strong> " . htmlspecialchars($_POST['address']) . "</p>";
                echo "<p><strong>Course:</strong> " . htmlspecialchars($_POST['course']) . "</p>";
            } else {
                echo "<p style='color:red;'><strong>Error:</strong> No Data Received!</p>";
            }
            ?>
        </div> 
        <a href="infor.php" class="btn">Register Another</a>
    </div>
</body>
</html>
