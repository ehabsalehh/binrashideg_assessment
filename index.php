<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p class="card-text"><a href="logout.php" class="btn btn-primary">Logout</a></p>
        </div>
    </div>
</div>
</body>
</html>
