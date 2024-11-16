<?php
session_start();

$host = 'localhost';
$db = 'amina';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT * FROM contacts");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATA Cosmitic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style2.css"> <!-- Your custom styles -->
</head>
<body>
<section id="data-display">
    <h1 class="section_title">Informations des Commandes</h1>
    <table class="table table-striped table-hover mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Baladiya</th>
                <th>Wilaya</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($contacts)): ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($contact['id']); ?></td>
                        <td><?php echo htmlspecialchars($contact['nom']); ?></td>
                        <td><?php echo htmlspecialchars($contact['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($contact['tele']); ?></td>
                        <td><?php echo htmlspecialchars($contact['baladiya']); ?></td>
                        <td><?php echo htmlspecialchars($contact['wilaya']); ?></td>
                        <td><?php echo htmlspecialchars($contact['kamiya']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Aucun command ajoute.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
    
</body>
</html>
