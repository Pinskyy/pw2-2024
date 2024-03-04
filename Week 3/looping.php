<?php

for ($i = 5; $i < 1000; $i++) {
    echo "<h1>$i</h1>";
}
    
//foreach
$buah = ['apel', 'pisang', 'jambu'];

foreach ($buah as $b) {
    echo "<h1>{$b}</h1>";
}