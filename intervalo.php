<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo entre números</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body> 

     <div class="container">

      <?php
        $N1 = $_POST["numero_um"];
        $N2 = $_POST["numero_dois"];

        $somaImpares = 0;
    if ($N1 > $N2) {
       for ($i = $N1; $i >= $N2; $i--) {
          echo "$i<br>";
            if ($i % 2 != 0) {
            $somaImpares += $i;
        }
    }
    } else {
      for ($i = $N1; $i <= $N2; $i++) {
          echo "$i<br>";
          if ($i % 2 != 0) {
            $somaImpares += $i;
        }
    }
}
echo "<p>Soma dos ímpares: $somaImpares</p>";

       echo "</table>";
       echo "<a href='intervalo.html'>Voltar</a>";
      ?>

    </div>
</body>
</html>