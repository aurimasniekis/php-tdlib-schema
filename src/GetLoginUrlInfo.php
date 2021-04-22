<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a button of type inlineKeyboardButtonTypeLoginUrl. The method needs to be called when the user presses the button.
 */
class GetLoginUrlInfo extends TdFunction
{
    public const TYPE_NAME = 'getLoginUrlInfo';

    /**
     * Chat identifier of the message with the button.
     */
    protected int $chatId;

    /**
     * Message identifier of the message with the button.
     */
    protected int $messageId;

    /**
     * Button identifier.
     */
    protected int $buttonId;

    public function __construct(int $chatId, int $messageId, int $buttonId)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
        $this->buttonId  = $buttonId;
    }

    public static function fromArray(array $array): GetLoginUrlInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'button_id'  => $this->buttonId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }
}
