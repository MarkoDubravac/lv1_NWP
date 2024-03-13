<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lv1</title>
</head>

<body>
    <?php
    include('lv1.php');
    $diplomskiRadovi = new DiplomskiRadovi([]);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['redni_broj'])) {
            $redni_broj = $_POST['redni_broj'];
            if ($redni_broj >= 2 && $redni_broj <= 6) {
                $response = $diplomskiRadovi->fetch($redni_broj);
            } else {
                echo "Nema toga rada";
            }
        }
        if (isset($_POST['getall'])) {
            $response = $diplomskiRadovi->read();
        }
    }
    ?>

    <form method="post">
        <label for="redni_broj">Redni broj:</label>
        <input type="text" name="redni_broj" id="redni_broj">
        <input type="submit" value="Dohvati i spremi">
    </form>

    <form method="post">
        <label for="getall">Dohvati iz baze:</label>
        <input type="hidden" name="getall" value="true">
        <input type="submit" value="Dohvati sve">
    </form>

</body>

</html>