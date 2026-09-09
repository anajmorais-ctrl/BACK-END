<?php 
$playlist = ["How deep is your love - Mitski", "Born To Die - Lana Del Rey","Stargirl Interlude - Lana Del Rey", "Girl, So Confused - Charli XCX", "Fame is a Gun - Addison Rae", "Get Him Back - Olivia Rodrigo"];
$qnt = count($playlist);
foreach($playlist as $i){
    echo $i , "<br>";
}
echo "O número de músicas na playlist é: $qnt";