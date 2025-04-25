<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quadrado com Asteriscos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Quadrado com Asteriscos</h1>

     <div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = intval($_POST["lado"]);

      
        for ($i = 0; $i < $lado; $i++) {
            for ($j = 0; $j < $lado; $j++) {
                if ($i == 0 || $i == $lado - 1 || $j == 0 || $j == $lado - 1) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
               
                echo "&nbsp;&nbsp;";
            }
            echo "<br>" ;
        }
    }
    echo "<a href='quadrado2.html'>Voltar</a>";
    ?>
    </div>
</body>
</html>