<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
    <style>
        body {
            background-color: orangered;
			height: 100vh;
        }

        .navbar {
            background-color: #222;
            border: none;
            border-radius: 0;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav > li > a {
            color: #fff;
        }

        .container {
            background-color: #fff;
            margin-top: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CRUD API</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="creating.html">Home</a></li>
                    <li><a href="creating.html">Create</a></li>
                    <li><a href="get_allUser1.php">Read</a></li>
                    <li><a href="updating.html">Update</a></li>
                    <li><a href="updating.html">Delete</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container mx-auto">
        <?php include '../php/get_allUsers_req.php' ?>
    </div>
</div>
</body>
</html>
