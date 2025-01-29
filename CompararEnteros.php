<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Enteros</title>
    <style>
        <?php echo file_get_contents('CompararEnteros.css'); ?>
    </style>
</head>
<body>
    <header>
        <h1>Comparar Números</h1>
        <p>Compara dos números y muestra si son iguales</p>
    </header>
    <main>
        <?php
        function compararEnteros($a, $b) {
            return ($a === $b) ? 1 : 0;
        }
        $num1 = 5;
        $num2 = 5;
        $resultado = compararEnteros($num1, $num2);
        echo "<p><strong>Número 1:</strong> $num1</p>";
        echo "<p><strong>Número 2:</strong> $num2</p>";
        echo "<h2>Resultado: " . ($resultado === 1 ? "Son iguales" : "Son diferentes") . "</h2>";
        ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Comparador de Enteros
    </footer>
</body>
</html>
