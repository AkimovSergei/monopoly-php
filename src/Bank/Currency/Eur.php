<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace Monopoly\Bank\Currency;

use Monopoly\Bank\AbstractCurrency;

/**
 * Class Eur
 */
class Eur extends AbstractCurrency
{
    /**
     * Pln constructor.
     *
     * @param string $code
     * @param string $print
     */
    public function __construct($code = 'EUR', $print = '€')
    {
        $this->code = $code;
        $this->print = $print;
    }
}
