
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
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
            border-radius: 20px;
            box-shadow: 10px 10px 10px rgba(10, 10, 10, 0.2);
            width: 350px;
        }
        .container h1 {
            text-align: center;
        }
        .forms {
            margin-bottom: 15px;
        }
        .forms label {
            display: block;
            font-weight: bold;
        }
        .forms input, .forms select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            background: #1f87f6;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
        #course
        {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Student Registration</h1>
        <form method="POST" action="Registration_form.php">
            <div class="forms">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="forms">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="forms">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="forms">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="forms">
                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                    <option value="Artificial Intelligence">Artificial Intelligence Engineering</option>
                    <option value="Computer Science">Computer Science Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                </select>
            </div>
            <button type="submit" class="btn">Registe</button>
        </form>
    </div>
</body>

</html>