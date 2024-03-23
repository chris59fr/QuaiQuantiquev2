<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des alcools</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffc107;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffc107;
            color: #fff;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Liste des alcools</h1>
    </div>
    <div class="container">
        <a href="/alcools/create" class="btn">Ajouter un alcool</a>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Volume</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alcools as $alcool): ?>
                    <tr>
                        <td><?= htmlspecialchars($alcool['nom']) ?></td>
                        <td><?= htmlspecialchars($alcool['type']) ?></td>
                        <td><?= htmlspecialchars($alcool['volume']) ?> ml</td>
                        <td><?= htmlspecialchars($alcool['prix']) ?> €</td>
                        <td>
                            <a href="/alcools/show/<?= $alcool['id'] ?>" class="btn">Voir</a>
                            <a href="/alcools/edit/<?= $alcool['id'] ?>" class="btn">Modifier</a>
                            <a href="/alcools/delete/<?= $alcool['id'] ?>" class="btn">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
