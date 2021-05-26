<?php
$array = array("musicals" => array("Oklahoma","The Music Man","South Pacific"),
               "dramas" =>array("Lawrence of Arabia","To Kill a Mockingbird","Casablanca"),
               "mysteries" => array("The Maltese Falcon","Rear Window" ,"North by Northwest"));

foreach($array as $a => $b){
    echo strtoupper($a);
    echo "<br><br>";
    foreach($b as $key => $value){
        echo "- - - -> $key = $value";
       echo "<br>";
    }
    echo"<br>";
}

echo "<h1>Sorted Array</h1>";
krsort($array);

foreach($array as $a => $b){
    echo strtoupper($a);
    echo "<br><br>";
    foreach($b as $key => $value){
        echo "- - - -> $key = $value";
       echo "<br>";
    }
    echo"<br>";
}
?>