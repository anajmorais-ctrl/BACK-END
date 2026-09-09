<?php
$a=0;
for ($i = 1; $i <= 50; $i++) {
    if ($i%3==0) {
        echo"Multiplo de 3: $i <br>";
       $a=$a+1;
}
}
 echo "Total de multiplos de 3: $a";