<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ?section=login");
    exit();
}

require_once 'db_connect.php';

// Get contact submissions
try {
    $stmt = $pdo->query("SELECT * FROM contact_submissions ORDER BY submission_date DESC");
    $submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Surplus2Serve Admin</a>
            <div class="navbar-nav">
                <a class="nav-link" href="logout.php">Logout</a>
                
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        
        <h2 class="mt-4">Contact Submissions</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($submissions as $submission): ?>
                <tr>
                    <td><?php echo $submission['id']; ?></td>
                    <td><?php echo htmlspecialchars($submission['name']); ?></td>
                    <td><?php echo htmlspecialchars($submission['email']); ?></td>
                    <td><?php echo htmlspecialchars($submission['phone']); ?></td>
                    <td><?php echo htmlspecialchars($submission['message']); ?></td>
                    <td><?php echo $submission['submission_date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>