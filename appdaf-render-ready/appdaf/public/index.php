<?php
require_once __DIR__ . '/../src/Connexion.php';

use App\Connexion;

$conn = Connexion::getInstance();
$stmt = $conn->query("SELECT 'Connexion à PostgreSQL réussie !' AS message");
$row = $stmt->fetch();

echo "<h1>AppDAF</h1>";
echo "<p>" . $row['message'] . "</p>";
