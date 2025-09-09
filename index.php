<?php
include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO list en PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Ma to do list</h2>
<form method="POST" action="add.php">
    <input type="text" name="task" placeholder="Nouvelle tâche..." required>
    <button type="submit">Ajouter</button>

</form>
<div class="tasks-container">
<?php
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <div class='task-card'>
            <p>" . htmlspecialchars($row['title']) . "</p>
            <small>Ajoutée le " . $row['created_at'] . "</small>
            <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Supprimer cette tâche ?');\">❌ Supprimer</a>
        </div>";
    }
} else {
    echo "<p>Aucune tâche pour le moment.</p>";
}
?>
</div>


</body>

</html>