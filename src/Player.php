<?php
namespace Src;

use Src\Team\Team;

class Player
{

    private $position;
    private $quality;
    private $speed;


    public function __construct( string $position , int $quality, int $speed)
    {
        $this->position = $position;
        $this->quality = $quality;
        $this->speed = $speed;

    }



    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $quality
     */
    public function setQuality($quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }







}