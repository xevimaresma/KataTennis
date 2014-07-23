<?php
/**
 * Created by PhpStorm.
 * User: xaviermaresma
 * Date: 23/07/14
 * Time: 10.57
 */

class Player {
    private $points=0;
    public function winPoint(){

        if($this->points == 30)
            $this->points = 40;

        if($this->points == 15)
            $this->points = 30;

        if($this->points == 0)
            $this->points = 15;

    }

    public function getPoints(){
        return $this->points;
    }
} 