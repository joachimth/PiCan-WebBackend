<?php

include_once('CanIdLookup.php');

    
function HexPosition($Number){
    switch ($Number) {
        case 0:
            return 4;
            break;
        case 1:
            return 5;
            break;
        case 2:
            return 6;
            break;
        case 3:
            return 7;
            break;
        case 4:
            return 8;
            break;
        case 5:
            return 9;
            break;            
        case 6:
            return 10;
            break;
        case 7:
            return 11;
            break;
        default:
            return "error";
    }
    
}

function Position($PositionValue){
    
    if (strpos($PositionValue, ',') !== false) {
        $returnArray = array();
        $numbers = explode(',',$PositionValue);
        foreach($numbers as $number){
            $Number = HexPosition($number);
            array_push($returnArray, $Number);
        }
        
        return $returnArray;
        
    }elseif(strpos($PositionValue, ':') !== false){
        $returnArray = array();
        $numbers = explode(':',$PositionValue);
        $Number = HexPosition($numbers[0]);
        
        return $Number;        
    }
    
    return 0;
    
}

function ConvertHex($CanId, $array) {
    global $CanIdArray;
    
    
    $ValueArray = $CanIdArray[strtoupper($CanId)];
    
    foreach($ValueArray as $Value){
        $formula = Position($Value[Position]);
        
    }
    
    
    return $formula;
}


$handle = fopen("log.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
            $line = explode(" ", $line);

            $sum = $line[4] + $line[5] + $line[6] + $line[7] + $line[8] + $line[9] + $line[10] + $line[11];

            if(!$sum){
                //do nothing as the values are all 0
            }else{
                    echo date('Y-m-d | h:i:suv a', $line[0]) . "$line[2] \r\n";
                $ValueArray = ConvertHex($line[2], $line);
                
                var_dump($ValueArray);
                
                exit;
            }

    }

    fclose($handle);
} else {
    // error opening the file.
} 


?>