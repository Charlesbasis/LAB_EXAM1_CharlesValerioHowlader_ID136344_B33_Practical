<?php
$LineNumber=1;
$j=1;
for(;$LineNumber<=20;$LineNumber++){
    echo "Line$LineNumber: ";
    for($i=1;$i<=$LineNumber;$i++){
        echo $j ." ";
        $j++;
    }
    echo "<br>";
}
?>