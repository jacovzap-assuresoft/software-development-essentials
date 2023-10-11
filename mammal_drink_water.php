<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cocha Zoo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Beber agua mamiferos</h1>
    <ul>
        <?php
        require_once 'classes/mammal.php';
        require_once 'classes/canine.php';
        require_once 'classes/chiropter.php';

        $dog = new Canine();
        $bat = new Chiropter();


        echo "<p>{$dog->drinksWater()}</p>";
        echo "<p>{$bat->drinksWater()}</p>";

        ?>
    </ul>
</body>

</html>