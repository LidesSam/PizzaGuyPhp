<?php

function ouputLine(){
    echo '---------------------------------'. PHP_EOL;
    return 0;
}



function ouputBlock(){
    echo '---------------------------------'. PHP_EOL;
    echo '|-------------------------------|'. PHP_EOL;
    echo '---------------------------------'. PHP_EOL;
    return 0;
}
function ouputOnBlock($str="action"){
    echo '---------------------------------'. PHP_EOL;
    $strLine='|-------------------------------|';
    $strLine.str_replace("-------",$str);

    echo $strLine. PHP_EOL;
    echo '---------------------------------'. PHP_EOL;
    return 0;
}
//conbine catributes with "M" example [1,5 bold+blink
function echoInColor($str="",$color="red"){
    $coloredstr= "\033[31m".$str."\033[0m";
    switch($color){
        
        case "black":
            $coloredstr="\033[30m".$str."\033[0m";
            break;
        case "red":
            $coloredstr="\033[31m".$str."\033[0m";
            break;
        case "green":
            $coloredstr="\033[32m".$str."\033[0m";
            break;
        case "yellow":
            $coloredstr="\033[33m".$str."\033[0m";
            break;
        case "blue":
            $coloredstr="\033[34m".$str."\033[0m";
            break;
        case "magenta":
            $coloredstr="\033[35m".$str."\033[0m";
            break;
        case "cyan":
            $coloredstr="\033[36m".$str."\033[0m";
            break;
        case "white":
            $coloredstr="\033[97m".$str."\033[0m";
            break;
    }
    
    echo $coloredstr;
    
}

?>