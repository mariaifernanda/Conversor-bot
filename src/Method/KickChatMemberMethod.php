<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Method;

use Greenplugin\TelegramBot\Method\Traits\ChatIdVariableTrait;
use Greenplugin\TelegramBot\Method\Traits\FillFromArrayTrait;
use Greenplugin\TelegramBot\Method\Traits\UserIdVariableTrait;

/**
 * Class KickChatMemberMethod.
 *
 * @see https://core.telegram.org/bots/api#kickchatmember
 */
class KickChatMemberMethod
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;
    use UserIdVariableTrait;
    /**
     * Optional. Date when the user will be unbanned, \DateTimeInterface.
     * If user is banned for more than 366 days or less than 30 seconds
     * from the current time they are considered to be banned forever.
     *
     * @var \DateTimeInterface|null
     */
    public $untilDate;

    /**
     * KickChatMemberMethod constructor.
     *
     * @param int|string $chatId
     * @param int        $userId
     * @param array|null $data
     *
     * @throws \Greenplugin\TelegramBot\Exception\BadArgumentException
     *
     * @return KickChatMemberMethod
     */
    public static function create($chatId, int $userId, array $data = null): KickChatMemberMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->userId = $userId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
