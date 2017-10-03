<?php

//this function is used to prepend data to a file
function prepend($string, $orig_filename) {
  $context = stream_context_create();
  $orig_file = fopen($orig_filename, 'r', 1, $context);

  $temp_filename = tempnam(sys_get_temp_dir(), 'php_prepend_');
  file_put_contents($temp_filename, $string);
  file_put_contents($temp_filename, $orig_file, FILE_APPEND);

  fclose($orig_file);
  unlink($orig_filename);
  rename($temp_filename, $orig_filename);
}

//this function is used to convert the input file array location to the system byte id
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
?>