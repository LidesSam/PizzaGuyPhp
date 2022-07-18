
<?php
require("programs/pencilbox.php");
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
    echo '1-tower'. PHP_EOL;//game
    echo '2-neon'. PHP_EOL;//game
    echo '3-testroom'. PHP_EOL;// used to test some misc
    echo '4-Smitch(template generator)'. PHP_EOL;// desing and store templates for diferent languages
    echo '5-Octopus ink'. PHP_EOL;// ascci animation editor
    echo '6-alien survivor'. PHP_EOL;
    echo '7-hawaiana'. PHP_EOL;// i forget fopr what this was
    echo '8-call alfred'. PHP_EOL;// check if the program alfred is installed
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
            echoInColor("Bye!","yellow");
            echo PHP_EOL;
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
