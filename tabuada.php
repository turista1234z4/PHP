<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        $N = $_POST["numero"];
        
        echo "<h1>Tabuada do $N</h1>";
        echo "<table>";
        echo "<tr><th>Operação</th><th>Resultado</th></tr>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $i * $N;
            echo "<tr><td>$i x $N</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
        echo "<a href='tabuada.html'>Voltar</a>";
        ?>
    </div>
</body>
</html>
