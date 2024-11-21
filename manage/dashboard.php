<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Include the database connection
require_once 'config.php';

// Fetch user data
try {
    $query = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching user data: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        nav {
            background-color: #343a40;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .card {
            flex: 1;
            padding: 20px;
            background: #007BFF;
            color: white;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card h2 {
            margin: 10px 0;
        }
        .card i {
            font-size: 2rem;
        }
        .content {
            margin-top: 20px;
        }
        .logout {
            text-align: center;
            margin-top: 20px;
        }
        .logout a {
            text-decoration: none;
            color: #007BFF;
            font-size: 1.1rem;
        }
        .logout a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    </header>
    <nav>
        <a href="#">Dashboard</a>
        <a href="profile.php">Profile</a>
        <a href="status.html">Reports</a>
        <a href="#">Settings</a>
    </nav>
    <div class="container">
        <div class="stats">
            <div class="card">
                <i class="fas fa-users"></i>
                <h2>120</h2>
                <p>Total Users</p>
            </div>
            <div class="card">
                <i class="fas fa-chart-line"></i>
                <h2>15%</h2>
                <p>aGrowth Rate</p>
            </div>
            <div class="card">
                <i class="fas fa-file-alt"></i>
                <h2>45</h2>
                <p>Reports</p>
            </div>
        </div>
        <div class="content">
            <h2>Recent Activities</h2>
            <p>Here you can display recent user activities or logs.</p>
        </div>

        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
