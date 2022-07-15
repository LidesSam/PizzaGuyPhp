<?php

$frame = 0;
$anim=array(
    array("<(_ _)>"),
    array("<(o o)>"),
    array("<(O O)>"),
    array("<(o o)>")
    
);

do{
    system('cls()');
    echo   PHP_EOL.PHP_EOL.PHP_EOL;
    echo   $anim[$frame][0].PHP_EOL;
    time_nanosleep(0,200);
    $frame+=1;
    if($frame>3){
        $frame=0;
    }
}
while(true);


function raineLine(){
    $frame = 0;
    $anim=array(
        array("<(_ _)>"),
        array("<(o o)>"),
        array("<(O O)>"),
        array("<(o o)>")
        
    );
    
    do{
        system('cls()');
        echo   $anim[$frame][0];
        $frame+=1;
        if($frame>3){
            $frame=0;
        }
    }
    while(true);
    
}
?>