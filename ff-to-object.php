<?php

  function ffToObj($name, $type, $path = YOUR_PATH, $delim = '|') {
    /*
      Flat File to Object
      -Creates an array from a delimited file (.txt, .csv, .tsv, etc.). Assumes headers present in first line.
        required:
          @ $name = any delimited file name
          @ $type = contents of file data, i.e. products, orders, customers, widgets, etc. (MUST correspond to a directory where the file in $name is located.)
        defaults:
          @ $path = YOUR_PATH (can be constant or hard-coded default or whatever.)
          @ $delim = | (pipe)
        options:
          @ $path = LIVE_PATH constant
          @ $delim = any character            
    */
    //Path
    $location = $path . $type . '\\' . $name;
      
    //File into array.
    $rawArr = file($location);
      
    //Headers
    $headers = explode($delim,$rawArr[0]);
        
    //Build Array
    unset($rawArr[0]);
    $dataArr = array_values($rawArr);
    $newArr = [$type => ''];
    foreach ($dataArr as $line) {
      $data = explode($delim,$line);
      $arr = [];
      foreach ($headers as $key => $arrKey) {
        $arr[rtrim($arrKey)] = rtrim($data[$key]);
      }
      $newArr[$type][] = (object) $arr;
    }
    $newArr[$type] = (object) $newArr[$type];
    
    //Return an object.
    return (object) $newArr;     
    
  }
    
 ?>