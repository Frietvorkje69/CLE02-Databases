<?php
session_start();

//admin check
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: ../login.php");
    exit;
}

//email uit sessie halen
$email = $_SESSION['loggedInUser']['email'];
if ($email != 'admin') {
    header("Location: ../login.php");
    exit;
}

//connectie database
require_once 'database.php';
/** @var mysqli $db */

//id ophalen en checken
if (!isset ($_GET['id']) || $_GET['id'] === "") {
    header('Location: index.php');
    exit;
}
//id opslaan in var
$userId = mysqli_escape_string($db, $_GET['id']);

//query haalt info op uit tabel
$query = "DELETE FROM reservations WHERE id = '$userId'";

//uitvoeren delete
$result = mysqli_query($db, $query)
or die('Error: ' . mysqli_error($db) . ' - Query: ' . $query);

//connectie sluiten
mysqli_close($db);

//terug sturen naar index
header('Location: index.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link
            rel="icon"
            href="https://cdn.glitch.me/dd3e24be-0f5e-4407-ac88-7e0d7057b1ff%2Ficonadmin.png?v=1638789158835"
    />
    <title>YOU WONT SEE THIS I THINK?</title>
    <link rel="stylesheet" href="../style2.css">
    <script src="https://kit.fontawesome.com/c7b1d33b1c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Mansalva&display=swap"
          rel="stylesheet">
</head>
<body>

</body>
</html>
