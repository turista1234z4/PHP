<?php

echo"<h2> Vetor aleatório:</h2>";
for ($i = 0; $i < 10; $i++ ){
    $vetor[$i] = mt_rand(1,100);
    print_r( $vetor[$i] );
    echo"<br>";
}

echo"<h2> Vetor inverso:</h2>";

for ($y = 9; $y >= 0; $y-- ){
    $inverso[$y] = $vetor[$y];
    print_r( $inverso[$y] );
    echo"<br>";
}
?>