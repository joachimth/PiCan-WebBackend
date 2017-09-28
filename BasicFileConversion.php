<?php


$handle = fopen("log.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
                $line = explode(" ", $line);

//              echo date('Y-m-d | h:i:suv a', $line[0]);
                $sum = $line[5] + $line[6] + $line[7] + $line[8] + $line[9] + $line[10] + $line[11];

                if(!$sum){
//                      var_dump($sum);
                }else{
                        var_dump(date('Y-m-d | h:i:suv a', $line[0]));
                }
                //var_dump($line);
//              exit;
    }

    fclose($handle);
} else {
    // error opening the file.
} 


?>
