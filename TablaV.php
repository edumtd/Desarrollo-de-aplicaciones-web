<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Verdad - OR</title>
    <style>
        <?php echo file_get_contents('TablaV.css'); ?> 
    </style>
</head>
<body>
    <header>
        <h1>Tabla de Verdad</h1>
        <p>Operador lógico OR</p>
    </header>
    <main>
        <table border="1" style="width:100%; text-align:center;">
            <tr>
                <th>A</th>
                <th>B</th>
                <th>A OR B</th>
            </tr>
            <?php
            $valores = [0, 1];
            foreach ($valores as $a) {
                foreach ($valores as $b) {
                    echo "<tr>
                        <td>$a</td>
                        <td>$b</td>
                        <td>" . ($a || $b ? 1 : 0) . "</td>
                    </tr>";
                }
            }
            ?>
        </table>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Tabla de Verdad OR
    </footer>
</body>
</html>
