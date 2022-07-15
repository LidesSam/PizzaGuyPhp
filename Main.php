
<?php
    require "Programs\shape.php";

    $options = array(
        '0->exit',
        '1-tower',
        '2-tower',
        '3-tower',
        '4-tower',
        '5-tower',
        '6-tower',
        '7-tower',
        '8-tower',
        '9-> next page' 
    );
	echo 'PizzaGuy:Aloha/n'. PHP_EOL;

    echo "   _ (`-.          .-') _   .-') _ ('-.                                             ". PHP_EOL;
    echo "  ( (OO  )        (  OO) ) (  OO) ( OO ).-.                                         ". PHP_EOL;
    echo " _.`     \,-.-'),(_)----.,(_)----./ . --. /        ,----.   ,--. ,--.    ,--.   ,--.". PHP_EOL;
    echo "(__...--''|  |OO|       ||       || \-.  \        '  .-./-')|  | |  |     \  `.'  / ". PHP_EOL;
    echo " |  /  | ||  |  '--.   / '--.   .-'-'  |  |       |  |_( O- |  | | .-') .-')     /  ". PHP_EOL;
    echo " |  |_.' ||  |(_(_/   /  (_/   / \| |_.'  |       |  | .--, |  |_|( OO (OO  \   /   ". PHP_EOL;
    echo " |  .___.,|  |_.'/   /___ /   /___|  .-.  |      (|  | '. (_|  | | `-' /|   /  /\_  ". PHP_EOL;
    echo " |  |   (_|  |  |        |        |  | |  |       |  '--'  ('  '-'(_.-' `-./  /.__) ". PHP_EOL;
    echo " `--'     `--'  `--------`--------`--' `--'        `------'  `-----'      `--'      ". PHP_EOL. PHP_EOL;
  
    do {
    ouputLine();
    echo 'PizzaGuy:Whats Your Order?'. PHP_EOL . PHP_EOL ;
    ouputBlock();
    echo 'page 1-1'. PHP_EOL ;
    echo '1-tower'. PHP_EOL;
    echo '2-neon'. PHP_EOL;
    echo '3-Welcome'. PHP_EOL;
    echo '4-Smitch(template generator)'. PHP_EOL;
    echo '5-Octopus ink'. PHP_EOL;
    echo '6-splice'. PHP_EOL;
    echo '7-hawaiana'. PHP_EOL;
    echo '8-call alfred'. PHP_EOL;
    echo '9-> next page'. PHP_EOL ;
    echo '0->exit'. PHP_EOL ;
    
    ouputLine();
    $select=readLine("select(use a number): ");// addd eche of comand
    }while(validate_option_selected($select));

    echo PHP_EOL.$options[$select].PHP_EOL;
    switch ($select){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
       
            echo "tower";
        
            break;
        case 0:
            echo "Bye!";
            break;
    }
    
function validate_option_selected(mixed $value = 0 ){
    if(!is_numeric($value)){
        invalid_choice();
        return true;
    }
    if($value>=10){
        invalid_choice();
        return true;
    }
    return false;
}

function invalid_choice(){
    ouputLine();
    echo "ivalid choice".PHP_EOL;
    ouputLine();
    
}
?>
