<?php

include_once('CanIdLookup.php');

$RunningArray = array();


    
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
    //this returns the correct array id's and formats the return values to ease the conversion of data.

    if (strpos($PositionValue, ',') !== false) {
        $returnArray = array();
        $numbers = explode(',',$PositionValue);
        foreach($numbers as $number){
            $Number = HexPosition($number);
            array_push($returnArray, $Number);
        }
        
        $Return = array(1,$returnArray);
        return $Return;
        
    }elseif(strpos($PositionValue, ':') !== false){
        $returnArray = array();
        $numbers = explode(':',$PositionValue);
        $Number = HexPosition($numbers[0]);
        
        $Return = array(2,$numbers[1]);
        return $Return;
    }else{
        $Number = HexPosition($numbers[0]);
        
        $Return = array(3,$Number);
        return $Return;
    }
    
    return 0;
    
}

function ConvertHex($CanId, $array) {
    global $CanIdArray, $RunningArray;
    $ValueArray = $CanIdArray[strtoupper($CanId)];
    
    foreach($ValueArray as $key => $Value){
        $formula = Position($Value[Position]);
        if($formula[0] == 1){
            //this is a comma value eg 1,2
            if (array_key_exists($Value[Name], $RunningArray)) {
                //in arrray: update
            }else{
                //not in array: add
            }
        }elseif($formula[0] == 2){
            //this one contains :
            if (array_key_exists($Value[Name], $RunningArray)) {
                //in arrray: update
            }else{
                //not in array: add
            }
        }elseif($formula[0] == 3){
            //this is a straight value
            if (array_key_exists($Value[Name], $RunningArray)) {
                //in arrray: update
            }else{
                //not in array: add
            }
            
        }
        
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
                    echo date('Y-m-d | h:i:suv a', $line[0]) . " $line[2] \r\n";
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