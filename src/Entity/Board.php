<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace Monopoly\Entity;

use Monopoly\Entity\Cards\Chance;
use Monopoly\Entity\Cards\CommunityChest;
use Monopoly\Entity\Cells\AbstractCell;

/**
 * Class Board
 */
class Board
{
    /**
     * @var AbstractCell[]
     */
    private $cells = [];

    /**
     * @var Chance[]
     */
    private $chanceCards = [];

    /**
     * @var CommunityChest[]
     */
    private $communityCards = [];

    /**
     * Add cell
     *
     * @param AbstractCell $cell
     *
     * @return self
     */
    public function addCell(AbstractCell $cell): self
    {
        $this->cells[] = $cell;

        return $this;
    }

    /**
     * @param Chance $chance
     *
     * @return self
     */
    public function addChanceCard(Chance $chance): self
    {
        $this->chanceCards[] = $chance;

        return $this;
    }

    /**
     * @param CommunityChest $communityChest
     *
     * @return self
     */
    public function addCommunityCard(CommunityChest $communityChest): self
    {
        $this->communityCards[] = $communityChest;

        return $this;
    }
}
