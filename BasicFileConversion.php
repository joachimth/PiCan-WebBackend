<?php

include_once('CanIdLookup.php');

$handle = fopen("log.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
            $line = explode(" ", $line);

            $sum = $line[4] + $line[5] + $line[6] + $line[7] + $line[8] + $line[9] + $line[10] + $line[11];

            if(!$sum){
                //do nothing as the values are all 0
            }else{
                    echo date('Y-m-d | h:i:suv a', $line[0]) . "$line[2] \r\n";
                foreach($CanIdArray as $CanId){
                    var_dump($CanId);
                    
                    
                }
                exit;
            }

    }

    fclose($handle);
} else {
    // error opening the file.
} 


?>