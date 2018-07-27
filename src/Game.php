<?php
namespace Src;


use Src\Team\Team;

class Game
{
    public $gameName;


    /**
     * Game constructor.
     * @param $gameName
     */
    public function __construct($gameName)
    {
        $this->gameName = $gameName;
    }

    /**
     * @param Team $team1
     * @param Team $team2
     */
//    public function simulateGame(Team $team1, Team $team2) : string
//    {
//        return rand(1,5).''.rand(1,5);
//    }


    /**
     * @param Team $team1
     * @param Team $team2
     */
    public function simulateGame() : string
    {
        return rand(1,5).':'.rand(1,5);
    }

}