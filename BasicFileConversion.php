<?php
error_reporting(0);

require_once('includes/CanIdLookup.php');
require_once('includes/Field_calculate.php');


$RunningArray = array();
$Tenth = null;
$LogFile = "log.txt";
    
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

function DetailedPosition($PositionValue){
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
        $returnArray = array($Number,$numbers[count($numbers)]);
        
        $Return = array(2,$returnArray);
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
    $CanValueArray = $CanIdArray[strtoupper($CanId)];
    
    foreach($CanValueArray as $CanKey => $CanValue){
        $formula = DetailedPosition($CanValue[Position]);
        
        switch ($formula[0]) {
            case 1:
                //this is a comma value eg 1,2
                 foreach($RunningArray as $RunningKey => $RunningValue){                    
                    if ($CanValue[Name] == $RunningKey) {
                        //in arrray: update
                        return "in arrray: update";
                    }else{
                        //not in array: add
                        $HexValue = null;
                        foreach($formula[1] as $HexValueKey){
                            $HexValue .= $array[$HexValueKey];
                        }
                        $ConvertedHex = hexdec($HexValue);
                        
                        
                        $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                        $Cal = new Field_calculate();
                        $result = $Cal->calculate($equation); 

                        
                        $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $CanValue[Name], "Units" => $CanValue[Units], "Conversion" => $CanValue[Conversion], "RawHex" => $HexValue, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                    }
                }
                if (empty($RunningArray)) {
                     // list is empty.
                    $ConvertedHex = hexdec($array[$formula[1]]);
                    
                    $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                    $Cal = new Field_calculate();
                    $result = $Cal->calculate($equation); 
                    
                    $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $Value[Name], "Units" => $Value[Units], "Conversion" => $Value[Conversion], "RawHex" => $HexValue, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                } 
                break;
            case 2:
                //this one contains :
                foreach($RunningArray as $RunningKey => $RunningValue){                    
                    if ($CanValue[Name] == $RunningKey) {
                        //in arrray: update
                        return "in arrray: update";
                    }else{
                        //not in array: add
                        $hex = $array[$formula[1][0]];
                        $ConvertedHex = hexdec($hex);
                        
                        $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                        $Cal = new Field_calculate();
                        $result = $Cal->calculate($equation);   
                        
                        $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $CanValue[Name], "Units" => $CanValue[Units], "Conversion" => $CanValue[Conversion], "RawHex" => $hex, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                    }
                }
                if (empty($RunningArray)) {
                     // list is empty.
                    $hex = $array[$formula[1][0]];
                    $ConvertedHex = hexdec($hex);
                    
                    $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                    $Cal = new Field_calculate();
                    $result = $Cal->calculate($equation); 

                    $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $Value[Name], "Units" => $Value[Units], "Conversion" => $Value[Conversion], "RawHex" => $hex, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                } 
                break;
            case 3:
                foreach($RunningArray as $RunningKey => $RunningValue){                    
                    if ($CanValue[Name] == $RunningKey) {
                        //in arrray: update
                        return "in arrray: update";
                    }else{
                        //not in array: add
                        $hex = $array[$formula[1]];
                        $ConvertedHex = hexdec($hex);
                        
                        $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                        $Cal = new Field_calculate();
                        $result = $Cal->calculate($equation);                         
                        
                        $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $CanValue[Name], "Units" => $CanValue[Units], "Conversion" => $CanValue[Conversion], "RawHex" => $hex, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                    }
                }
                if (empty($RunningArray)) {
                     // list is empty.
                    $hex = $array[$formula[1]];
                    $ConvertedHex = hexdec($hex);
                    
                    $equation = str_replace("x", $ConvertedHex, $CanValue[Conversion]);
                    $Cal = new Field_calculate();
                    $result = $Cal->calculate($equation);  
                    
                    $entry = array($CanValue[Name] => array("Value" => $result, "Name"=> $Value[Name], "Units" => $Value[Units], "Conversion" => $Value[Conversion], "RawHex" => $hex, "DateTime" => $array[0]));
                        if($ConvertedHex != 0){
                            $RunningArray = array_merge($RunningArray, $entry);
                        }
                }                
                break;
            default:
                return 0;
        }//close switch     
    }//close foreach
    return 1;
}






$filename = 'test.txt';
$somecontent = "Add this to the file\n";


//get the first line of the log file, so we can name the file with the correct start time
$f = fopen($LogFile, 'r');
$line = fgets($f);
fclose($f);
$line = explode(' ', $line);
$line = explode('.', $line[0]);
$OutputFile = date('YmdHis', $line[0]) . ".txt";
touch($OutputFile);


//open log file and iterate over it
$handle = fopen($LogFile, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $line = explode(" ", $line);

        $sum = (boolean) ($line[4] . $line[5] . $line[6] . $line[7] . $line[8] . $line[9] . $line[10] . $line[11]);
        //echo $sum . "\n\r";

        $DateTime = explode('.', $line[0]);

        
        //Write to file every 1/10th of a second:
        
        if(is_null($Tenth)){
            $Tenth = $DateTime[1][0];
        }

        if($Tenth == $DateTime[1][0]){
            //do nothing as its the same tenth of a second
        }else{
            //do something its not the same tenth of a second (this assumes is the next tenth of a second)
            
            if (is_writable($OutputFile)) {
                //append to the outputfile                
                if (!$TenthHandle = fopen($OutputFile, 'a')) {
                     echo "Cannot open file ($OutputFile)";
                     exit;
                }

                // Write $somecontent to our opened file.
                foreach($RunningArray as $TenthOutput){
                    $WriteString = $TenthOutput[Value] ." ". $TenthOutput[Units] . " " . $TenthOutput[Name] . " , "; 
                    if (fwrite($TenthHandle, $WriteString) === FALSE) {
                        echo "Cannot write to file ($OutputFile)";
                    }
                }//close foreach
                
                fclose($TenthHandle);

            } else {
                echo "The file $OutputFile is not writable";
            }

            //clear the $RunningArray and the $Tenth counter
            $RunningArray = array();
            $Tenth = null;
            
        }//close else            
            


        if(!$sum){
            //do nothing as the values are all 0
        }else{
            //echo date('Y-m-d | h:i:s', $DateTime[0]) . ".$DateTime[1] $line[2] \r\n";
            $return = ConvertHex($line[2], $line);
            //var_dump($return);
        }

    }

    fclose($handle);
} else {
    // error opening the file.
} 

var_dump($RunningArray);
//exit;
?>