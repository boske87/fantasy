<?php
namespace Src\Team;

use \Exception;
use Src\Player;
use Src\Team\TeamInterface;

class Team implements TeamInterface
{
    public $players = array();
    private $name;
    private $maxPlayers = 22;

    /**
     * Team constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function addPlayer(Player $player){

        if(count($this->players) >= $this->maxPlayers)
            throw new Exception("Max numbers of players is 22".count($this->players));

        $this->players [] = $player;
    }

    /**
     * @return array
     */
    public function getTeam(): array
    {
        return $this->players;
    }





}