<?php
error_reporting(0);


require_once('includes/CanIdLookup.php');
require_once('includes/Field_calculate.php');
require_once('includes/GeneralFunctions.include.php');
require_once('includes/DeviceFunctions/Haltech.include.php');


$RunningArray = array();
$Tenth = null;
$LogFile = "log.txt";




$filename = 'test.txt';
$somecontent = "Add this to the file\n";


//get the first line of the log file, so we can name the file with the correct start time
$f = fopen($LogFile, 'r');
$line = fgets($f);
fclose($f);
$line = explode(' ', $line);
$line = explode('.', $line[0]);
$OutputFile = date('YmdHis', $line[0]) . ".txt";

//create outputfile with the correct name, so we can append to it in the loop
touch($OutputFile);


//open log file and iterate over it
$handle = fopen($LogFile, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $line = explode(" ", $line);

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
                // Write content to our opened file.
                
                //order array by Name
                foreach($RunningArray as $key => $value) {
                    $columns = null;
                    foreach ($value as $index => $element) {
                        $columns[] = $element['Name'];
                    }
                    $temp = $value;
                    array_multisort($columns, SORT_ASC, $temp);
                    $sorted_values[$key] = $temp;
                }
                
                $RunningArray = $sorted_values;
                
                foreach($RunningArray as $TenthOutput){
                    var_dump($TenthOutput);
                    $WriteString = $TenthOutput[Value] ." ". $TenthOutput[Units] . " " . $TenthOutput[Name] . " , "; 
                    if (fwrite($TenthHandle, $WriteString) === FALSE) {
                        echo "Cannot write to file ($OutputFile)";
                    }
                }//close foreach
                if (fwrite($TenthHandle, "\n") === FALSE) {
                    echo "Cannot write to file ($OutputFile)";
                }
                fclose($TenthHandle);
            } else {
                echo "The file $OutputFile is not writable";
            }

            //clear the $RunningArray and the $Tenth counter
            $RunningArray = array();
            $Tenth = null;
            
        }//close else            
            

        $sum = (boolean) ($line[4] . $line[5] . $line[6] . $line[7] . $line[8] . $line[9] . $line[10] . $line[11]);

        if(!$sum){
            //do nothing as the values are all 0
        }else{
            //call ConvertHex as there is data in the row
            $return = ConvertHex($line[2], $line);
        }

    }

    fclose($handle);
} else {
    // error opening the file.
} 

//var_dump($RunningArray);
//exit;
?>