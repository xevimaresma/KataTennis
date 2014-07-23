<?php
/**
 * Created by PhpStorm.
 * User: xaviermaresma
 * Date: 23/07/14
 * Time: 11.59
 */

class MatchTest extends PHPUnit_Framework_TestCase {
    public function test_GameWiner(){
        $player1 = new Player();
        $player2 = new Player();
        $match = new Match($player1, $player2);
        $match->run();
        $this->assertNotEmpty($match->getWinner());
    }

    public function test_GameDeuce(){
        $player1 = new Player();
        $player1->winPoint();
        $player1->winPoint();
        $player1->winPoint();
        $player2 = new Player();
        $player2->winPoint();
        $player2->winPoint();
        $player2->winPoint();
        $match = new Match($player1, $player2);
        $match->run();
        $this->assertNotEmpty($match->getWinner());
    }

}
 