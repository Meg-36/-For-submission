<?php
$host = 'mysql';
$db   = 'shop';
$user = 'shop_user';
$pass = 'shop_pass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("データベース接続エラー: " . $e->getMessage());
}
?>

<h1>Products List</h1>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
</tr>
<?php foreach ($products as $p): ?>
<tr>
    <td><?= htmlspecialchars($p['product_id']) ?></td>
    <td><?= htmlspecialchars($p['product_name']) ?></td>
    <td><?= htmlspecialchars($p['price']) ?></td>
    <td><?= htmlspecialchars($p['stock']) ?></td>
</tr>
<?php endforeach; ?>
</table>
