<!DOCTYPE html>
<html>
<head>
    <title>Volunteer Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Volunteer Panel</h1>
    </header>
    <div class="container">
       
        <nav>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="manage_posts.php">Task center</a></li>
                <li><a href="manage_users.php">Upcoming events</a></li>
                <li><a href="financial_records.php">Records</a></li>
                
            </ul>
        </nav>
        
        <h2>Settings</h2>
        <ul>
            <li><a href="site_settings.php">Set your free time</a></li>
        </ul>

        <h2>Actions</h2>
        <button><a href="home.php">Home</a></button>
        <button><a href="logout.php">Logout</a></button>
    </div>
    
</body>
</html>
