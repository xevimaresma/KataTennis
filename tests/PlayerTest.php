<?php
/**
 * Created by PhpStorm.
 * User: xaviermaresma
 * Date: 23/07/14
 * Time: 10.58
 */

class PlayerTest extends PHPUnit_Framework_TestCase {

    public function test_playerCanWinPoints(){
        $player = new Player();
        $this->assertEquals($player->getPoints(), 0);
        $player->winPoint();
        $this->assertEquals($player->getPoints(), 15);
        $player->winPoint();
        $this->assertEquals($player->getPoints(), 30);
        $player->winPoint();
        $this->assertEquals($player->getPoints(), 40);
    }

}
 