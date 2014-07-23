<?php
/**
 * Created by PhpStorm.
 * User: xaviermaresma
 * Date: 23/07/14
 * Time: 10.57
 */

class Match {
    private $running;

    private $player1;
    private $player2;
    private $winner;

    public function __construct($player1,$player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getWinner(){
        return $this->winner;
    }

    public function run(){
        $this->running = true;
        while ($this->running){
            if(rand(0,100)%2==0){
                $this->player1->winPoint();
            }else{
                $this->player2->winPoint();
            }

            if($this->player1->getPoints()==40 && $this->player2->getPoints()==40){
                $this->running = false;
                continue;
            }


            if($this->player1->getPoints()==40){
                $this->running = false;
                $this->winner = "player1";
            }

            if($this->player2->getPoints()==40){
                $this->running = false;
                $this->winner = "player2";
            }

        }

    }
} 