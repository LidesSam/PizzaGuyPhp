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

?>