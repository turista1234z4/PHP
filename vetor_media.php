<?php
$media = 0;
$numeros_30 = 0;
$acima = 0;

for ($i = 0; $i < 25; $i++) {
$vetor[$i] = mt_rand(20,40);

print_r($vetor[$i]);
echo"<br>";
$media += $vetor[$i];

if ($vetor[$i] == 30) {
$numeros_30++;
}

}
for ($i = 0; $i < 25; $i++) {
    if ($vetor[$i] > ($media/25)){
        $acima++;
    } 
}


echo"<h3> total de numeros 30: ". $numeros_30;
echo "<br>";
echo"<h3>Media: " . ($media/25);
echo"<h3> total de numeros acima da media: ". $acima;
echo "<br>";
echo"<h3> total de numeros abaixo da media: ". (25 - $acima);


?>