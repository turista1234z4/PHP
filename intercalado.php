<?php

for ($i = 0; $i < 10; $i++) {
    $vetor1[$i] = mt_rand(1,100);
    $vetor2[$i] = mt_rand(1,100);

}

for ($i = 0; $i < 10; $i++) {
    $intercalado[$i * 2] = $vetor1[$i];  

    $intercalado[$i * 2 + 1] = $vetor2[$i];   
}

echo"<h3>Vetor 1: </h3><br>";

foreach($vetor1 as $valor){
    echo "".$valor."<br>";
}

echo"<h3>Vetor 2: </h3><br>";
foreach($vetor2 as $valor){
    echo "".$valor."<br>";
}

echo"<h3>Vetor Intercalado: </h3><br>";
foreach($intercalado as $valor){
    echo "".$valor."<br>";
}
?>