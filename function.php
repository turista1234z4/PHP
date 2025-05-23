<?php
function calcularPerimetro($figura, $lados) {
    switch ($figura) {
        case "retangulo":
            if (count($lados) != 2) return "Erro: Retângulo precisa de base e altura.";
            return 2 * ($lados[0] + $lados[1]);

        case "quadrado":
            if (count($lados) != 1) return "Erro: Quadrado precisa de um lado.";
            return 4 * $lados[0];

        case "paralelogramo":
            if (count($lados) != 2) return "Erro: Paralelogramo precisa de dois lados.";
            return 2 * ($lados[0] + $lados[1]);

        case "trapezio":
            if (count($lados) != 4) return "Erro: Trapézio precisa de quatro lados.";
            return array_sum($lados);

        default:
            return "Erro: Figura desconhecida.";
    }
}
?>
