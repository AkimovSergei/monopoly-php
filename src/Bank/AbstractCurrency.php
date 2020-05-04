<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace Monopoly\Bank;

/**
 * Class Currency
 */
abstract class AbstractCurrency
{
    /**
     * Currency code
     *
     * @var string
     */
    protected $code;

    /**
     * Print representation
     *
     * @var string
     */
    protected $print;
}
