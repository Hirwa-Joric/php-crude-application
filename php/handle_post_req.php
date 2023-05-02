<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include 'crud_functions.php';
    include 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        add_users($connection);
    }
    ?>
    <h1>
        To get all users, click on this link
    </h1>
    <a href="../client/get_allUser1.php">Get All Users</a>
</body>
</html>
