<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mariana conta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body> 

     <div class="container">

      <?php
        $N = $_POST["numero"];
        echo "<h1>Mariana conta $N</h1>";
        echo "<table>";
        for ($i = 1; $i < $N+1; $i++) {

           echo"Mariana conta $i
                <br>Mariana conta $i
                <br>É $i,  
                <br>É Ana Viva Mariana, Viva Mariana
                <br>";

              echo "<br>";
       }
       echo "</table>";
       echo "<a href='mariana.html'>Voltar</a>";
      ?>

    </div>
</body>
</html>