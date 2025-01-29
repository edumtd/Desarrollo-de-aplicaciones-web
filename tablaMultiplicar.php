<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        <?php echo file_get_contents('tablaMultiplicar.css'); ?> 
    </style>
</head>
<body>
    <header>
        <h1>Tabla de Multiplicar</h1>
        <p>Un número aleatorio con su tabla de multiplicar</p>
    </header>
    <main>
        <?php
        $numero = rand(1, 10);
        echo "<h2>Tabla del $numero</h2>";
        echo "<table border='1' style='width:100%; text-align:center;'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$numero x $i</td><td>" . ($numero * $i) . "</td></tr>";
        }
        echo "</table>";
        ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Tabla de Multiplicar
    </footer>
</body>
</html>
