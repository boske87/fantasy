<?php
namespace Src;


use Src\Traits\OperationTrait;

class Strategy
{
    use OperationTrait;

    private $team;
    private $allTeamByPosition = array();



    /**
     * Strategy constructor.
     */
    public function __construct($team)
    {
        $this->team = $team;
        $this->allTeamByPosition = $this->sortPlayerByPosition();

    }

    public function resetTeam()
    {
        $this->allTeamByPosition = $this->sortPlayerByPosition();
    }


    public function setStrategyOne()
    {
        $this->bestPlayerByOptions('goalies', 'quality', 1);
        $this->bestPlayerByOptions('defenders', 'quality', 5);
        $this->bestPlayerByOptions('midfielders', 'quality', 4);
        $this->bestPlayerByOptions('strikers', 'speed', 1);

    }


    public function setStrategyTwo()
    {
        $this->bestPlayerByOptions('goalies', 'quality', 1);
        $this->bestPlayerByOptions('defenders', 'quality', 4);
        $this->bestPlayerByOptions('midfielders', 'quality', 4);
        $this->bestPlayerByOptions('strikers', 'quality', 2);

    }

    public function setStrategyThree()
    {
        $this->bestPlayerByOptions('goalies', 'quality', 1);
        $this->bestPlayerByOptions('defenders', 'quality', 3);
        $this->bestPlayerByOptions('midfielders', 'quality', 4);
        $this->bestPlayerByOptions('strikers', 'quality', 3);
    }

    public function injuredPlayer()
    {
        unset($this->team[array_rand($this->team)]);
    }


    public function getTeam()
    {
        return $this->allTeamByPosition;
    }



}