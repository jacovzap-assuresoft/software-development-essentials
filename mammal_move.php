<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cocha Zoo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Mover mamiferos</h1>
    <ul>
        <?php
        require_once 'classes/mammal.php';
        require_once 'classes/canine.php';
        require_once 'classes/chiropter.php';
        require_once 'classes/cetacean.php';

        $dog = new Canine();
        $bat = new Chiropter();
        $whale = new Cetacean();

        echo "<p>{$dog->translation()}</p>";
        echo "<p>{$bat->translation()}</p>";
        echo "<p>{$whale->translation()}</p>";
        ?>
    </ul>
</body>

</html>