<?php
$dsn = 'mysql:host=db;dbname=sampledb;charset=utf8';
$user = 'user';
$pass = 'userpass';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT * FROM users");
    echo "<h1>Users List</h1><ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "DB error: " . $e->getMessage();
}
?>
