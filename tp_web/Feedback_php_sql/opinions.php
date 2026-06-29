<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données en PHP</title>
    <style>
        h2 {
            color: blue;
            font-family: serif;
        }

        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: none;
        }

        th {
            background-color: #757575;
            color: white;
            padding: 5px;
            border: 2px solid blue;
        }

        td {
            padding: 5px;
            border: 2px solid blue;
            color: black;
        }

        a {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h2>Les opinions d'habitants:</h2>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'meknesdb');
    if (!$conn) {
        die("Echec : " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM opinions";
    $result = mysqli_query($conn, $sql);
    ?>
    <table>
        <tr>
            <th>Email</th>
            <th>Quartiers</th>
            <th>Messages</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['quartiers']; ?></td>
                <td><?php echo $row['message']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="javascript:history.back()">Précédent</a>
    <?php mysqli_close($conn); ?>
</body>

</html>