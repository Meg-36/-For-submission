<?php
$dsn = "mysql:host=mysql;dbname=sampledb;charset=utf8";
$user = "user";
$pass = "userpass";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT * FROM users");
    echo "<h1>Users</h1><ul>";
    foreach ($stmt as $row) {
        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "DB error: " . $e->getMessage();
}
?>
