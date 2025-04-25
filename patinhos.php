<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patinhos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
          $N = $_POST["numero"];
          $A = $N;
          
          echo "<h1>Os $N patinhos foram passear</h1>";
          echo "<table>";
          for ($i = $N; $i > 0; $i--) {
            $N = $N-1;
            $R = $N - 1;
            if($R == 0 ){
              break;
            }
             echo" $N patinhos foram passear 
                  <br>Além das montanhas  
                  <br>Para brincar 
                  <br>A mamãe gritou: Quá, quá, quá, quá 
                  <br>Mas só $R  patinhos voltaram de lá.
                  <br>";
  
                echo "<br>";
         }
         echo "<br>A mamãe patinha foi procurar 
          <br>Além das montanhas 
          <br>Na beira do mar 
          <br>A mamãe gritou: Quá, quá, quá, quá 
          <br>E os $A patinhos voltaram de lá. 
                  <br>";
         echo "</table>";
         echo "<a href='patinhos.html'>Voltar</a>";
        ?>
    </div>
</body>
</html>