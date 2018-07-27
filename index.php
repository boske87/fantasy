<?php
require_once __DIR__ . '/vendor/autoload.php';

use Src\Game;
use Src\Player;
use Src\Strategy;
use Src\Team\Team;

//create Team
$team = new Team('test');


$playersPool = array(
    array(
        'position' => 'goalies',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'goalies',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'defenders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,10),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,10),
        'speed' =>rand(1,10),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,10),
        'speed' =>rand(1,10),
    ),
    array(
        'position' => 'midfielders',
        'quality' =>rand(1,10),
        'speed' =>rand(1,10),
    ),
    array(
        'position' => 'strikers',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'strikers',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'strikers',
        'quality' =>rand(1,100),
        'speed' =>rand(1,100),
    ),
    array(
        'position' => 'strikers',
        'quality' =>rand(1,10),
        'speed' =>rand(1,10),
    )
);




//create Player
foreach ($playersPool as $one) {
    $player = new Player($one['position'], $one['quality'], $one['speed']);
    try {
        //If the exception is thrown, this text will not be shown
        $team->addPlayer($player);
    }
//catch exception
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
}


$bestTeam = new Strategy($team->getTeam());
$game = new Game('UEFA League group');


//first game
$bestTeam->setStrategyOne();
$team1 = $bestTeam->getTeam();
print_r($team1);
$res = $game->simulateGame();
echo $res;

$bestTeam->injuredPlayer();



//first two
$bestTeam->resetTeam();
$bestTeam->setStrategyTwo();
$team2 = $bestTeam->getTeam();
print_r($team2);
$bestTeam->injuredPlayer();


//first three

$bestTeam->resetTeam();
$bestTeam->setStrategyThree();
$team3 = $bestTeam->getTeam();
print_r($team3);
