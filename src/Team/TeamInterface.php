<?php
namespace Src\Team;
use Src\Player;
/**
 * all user classes must implement.
 */

interface TeamInterface
{
    /**
     * @return mixed
     */
    public function addPlayer(Player $player);

    /**
     * @return mixed
     */
    public function getTeam() : array;




}