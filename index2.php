<?php include 'function.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Perímetros</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { margin-bottom: 20px; }
        label { display: block; margin-top: 10px; }
        input { margin-top: 5px; display: block; }
    </style>
</head>
<body>

<h2>Calculadora de Perímetros</h2>

<form method="post">
    <label>Escolha a figura:</label>
    <select name="figura" id="figura" required>
        <option value="">Selecione</option>
        <option value="retangulo">Retângulo</option>
        <option value="quadrado">Quadrado</option>
        <option value="paralelogramo">Paralelogramo</option>
        <option value="trapezio">Trapézio</option>
    </select>

    <div id="inputs"></div>

    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = $_POST['figura'];
    $lados = [];

    
    switch($figura) {
        case "retangulo":
            $lados[] = $_POST['base'];
            $lados[] = $_POST['altura'];
            break;
        case "quadrado":
            $lados[] = $_POST['lado'];
            break;
        case "paralelogramo":
            $lados[] = $_POST['lado1'];
            $lados[] = $_POST['lado2'];
            break;
        case "trapezio":
            $lados[] = $_POST['lado1'];
            $lados[] = $_POST['lado2'];
            $lados[] = $_POST['lado3'];
            $lados[] = $_POST['lado4'];
            break;
    }

    $resultado = calcularPerimetro($figura, $lados);
    echo "<h3>Resultado: $resultado</h3>";
}
?>

<script>
    const figuraSelect = document.getElementById('figura');
    const inputsDiv = document.getElementById('inputs');

    figuraSelect.addEventListener('change', function() {
        const figura = this.value;
        inputsDiv.innerHTML = ''; // Limpa os inputs

        if (figura === 'retangulo') {
            inputsDiv.innerHTML += '<label>Base:</label><input type="number" name="base" required step="any">';
            inputsDiv.innerHTML += '<label>Altura:</label><input type="number" name="altura" required step="any">';
        } else if (figura === 'quadrado') {
            inputsDiv.innerHTML += '<label>Lado:</label><input type="number" name="lado" required step="any">';
        } else if (figura === 'paralelogramo') {
            inputsDiv.innerHTML += '<label>Lado 1:</label><input type="number" name="lado1" required step="any">';
            inputsDiv.innerHTML += '<label>Lado 2:</label><input type="number" name="lado2" required step="any">';
        } else if (figura === 'trapezio') {
            inputsDiv.innerHTML += '<label>Lado 1:</label><input type="number" name="lado1" required step="any">';
            inputsDiv.innerHTML += '<label>Lado 2:</label><input type="number" name="lado2" required step="any">';
            inputsDiv.innerHTML += '<label>Lado 3:</label><input type="number" name="lado3" required step="any">';
            inputsDiv.innerHTML += '<label>Lado 4:</label><input type="number" name="lado4" required step="any">';
        }
    });
</script>

</body>
</html>
