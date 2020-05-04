<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace Monopoly;

use Monopoly\Factory\BoardFactory;

/**
 * Class Game
 */
class Game
{
    /** @var Board */
    private $board;

    public function __construct(BoardFactory $boardFactory)
    {
        $this->board = $boardFactory->build();
    }
}
