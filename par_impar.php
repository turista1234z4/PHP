<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <title>Par ou Impar</title>
</head>
<body>

<form method="post">
    <h3>digite quantas posições terá o vetor: 
    </h3>
    <label>Número:</label>
    <input type="number" name="numero" required step="any">

    <button type="submit">Enviar</button>

</form>
<?php

$total_pares = 0;
$total_impares =0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
$numero_de_posicoes = $_POST['numero'];

for($i = 0; $i < $numero_de_posicoes; $i++){

$vetor[$i] = mt_rand(1,100);

print_r($vetor[$i]);

if($vetor[$i] %2 == 0){
    echo "<strong>: Número par</strong>";
    $total_pares++;
    echo'<br>';
}
else{
    echo "<strong>: Número Ímpar</strong>";
    $total_impares++;
    echo'<br>';
}
}

echo "<strong>Total de pares: </strong>" .$total_pares;
echo"<br>";
echo "<strong>Total de ímpares: </strong>" .$total_impares;

}

?>
</body>

</html>