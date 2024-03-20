// admin_panel.php
<?php
require '../includes/connect.php'; // This script should contain your PDO connection

try {
    // Query to select data from the database
    $stmt = $conn->query("SELECT * FROM users"); // Replace with your actual table name
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

// HTML and PHP mixed to display data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Stylesheets and scripts here -->
</head>
<body>
    <h1>Admin Dashboard</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data 1</th>
                <th>Data 2</th>
                <!-- More table headers -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id']) ?></td>
                <td><?= htmlspecialchars($item['column1']) ?></td>
                <td><?= htmlspecialchars($item['column2']) ?></td>
                <!-- More table data -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
