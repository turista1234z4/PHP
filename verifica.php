<?php

function maiorNumero($a, $b, $c) {
    return max($a, $b, $c);
}

function menorNumero($a, $b, $c) {
    return min($a, $b, $c);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Maior e Menor Número</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input { margin-top: 5px; display: block; }
    </style>
</head>
<body>

<h2>Informe três números</h2>

<form method="post">
    <label>Número 1:</label>
    <input type="number" name="num1" required step="any">

    <label>Número 2:</label>
    <input type="number" name="num2" required step="any">

    <label>Número 3:</label>
    <input type="number" name="num3" required step="any">

    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $maior = maiorNumero($num1, $num2, $num3);
    $menor = menorNumero($num1, $num2, $num3);

    echo "<h3>Maior número: $maior</h3>";
    echo "<h3>Menor número: $menor</h3>";
}
?>

</body>
</html>
