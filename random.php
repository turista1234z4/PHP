<?php

for ($i = 0; $i <= 30; $i++) {

$vetor[$i] = mt_rand(1,100);


if ($vetor[$i] % 6  == 0) {
print_r($vetor[$i]);
echo "<br>";
}
}

?>