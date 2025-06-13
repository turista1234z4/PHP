<?php

function verificaPositivo($numero) {
    if ($numero > 0) {
        return 'P';
    } else {
        return 'N';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verifica Positivo ou Negativo</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input { margin-top: 5px; display: block; }
    </style>
</head>
<body>

<h2>Informe um número</h2>

<form method="post">
    <label>Número:</label>
    <input type="number" name="numero" required step="any">

    <button type="submit">Verificar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $resultado = verificaPositivo($numero);

    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>
