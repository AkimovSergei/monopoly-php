<?php

require_once "vendor/autoload.php";

use Monopoly\Factory\BoardFactory;
use Monopoly\Game;

$game = new Game(
    new BoardFactory()
);

var_dump($game);
die;
