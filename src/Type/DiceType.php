<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class DiceType.
 *
 * This object represents a dice with random value from 1 to 6 for currently supported base emoji.
 * (Yes, we're aware of the βproperβ singular of die.
 * But it's awkward, and we decided to help it change.
 * One dice at a time!)
 *
 * @see https://core.telegram.org/bots/api#dice
 */
class DiceType
{
    /**
     * @var int
     *
     * Value of the dice, 1-6 for βπ²β and βπ―β base emoji, 1-5 for βπβ and ββ½β base emoji, 1-64 for βπ°β base emoji
     */
    public $value;

    /**
     * Emoji on which the dice throw animation is based.
     *
     * @var string|null
     */
    public $emoji;
}
