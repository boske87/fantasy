<?php
namespace Src\Traits;



trait OperationTrait
{
    public function sortPlayerByPosition()
    {
        $teamByPosition = array();
        foreach ($this->team as $onePlayer) {
            $teamByPosition [$onePlayer->getPosition()] [] = $onePlayer;
        }

        return $teamByPosition;
    }

    public function bestPlayerByOptions(string $position, string $options, $num)
    {

        usort($this->allTeamByPosition[$position], function ($a, $b) use ($options) {
            return $a->getQuality() <=> $b->getQuality();
        });
        $this->allTeamByPosition[$position] = $this->pickBest($position, $num);
    }


    private function pickBest($position, $offset)
    {
        return  array_slice($this->allTeamByPosition[$position], -$offset,$offset ,true);

    }

}