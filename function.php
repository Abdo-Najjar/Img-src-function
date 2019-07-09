<?php

/*
    function that returns an array 
    getting all the paths from HTML content passes as string 
*/
function getPaths($st){

    $arr = [];
    for($i = 0  ; $i<strlen($st) ; $i++){

        if($st[$i] =="s"):
           
            if($st[$i+1].$st[$i+2].$st[$i+3].$st[$i+4] == 'rc="'):
                
               $j=  $i+5;

               $path = "";

                while($st[$j] != '"'){

                    $path .= $st[$j];
                    $j++;
                }
                array_push($arr , $path);  
            else:
                continue;
            endif;
        endif;

    }
    return $arr;

}