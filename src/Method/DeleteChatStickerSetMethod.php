<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Method;

use Greenplugin\TelegramBot\Method\Traits\ChatIdVariableTrait;

/**
 * Class DeleteChatStickerSetMethod.
 *
 * @see https://core.telegram.org/bots/api#deletechatstickerset
 */
class DeleteChatStickerSetMethod
{
    use ChatIdVariableTrait;

    /**
     * @param int|string $chatId
     *
     * @return DeleteChatStickerSetMethod
     */
    public static function create($chatId): DeleteChatStickerSetMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;

        return $instance;
    }
}
