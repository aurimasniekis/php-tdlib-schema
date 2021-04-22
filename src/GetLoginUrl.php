<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an HTTP URL which can be used to automatically authorize the user on a website after clicking an inline button of type inlineKeyboardButtonTypeLoginUrl. Use the method getLoginUrlInfo to find whether a prior user confirmation is needed. If an error is returned, then the button must be handled as an ordinary URL button.
 */
class GetLoginUrl extends TdFunction
{
    public const TYPE_NAME = 'getLoginUrl';

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

    /**
     * True, if the user allowed the bot to send them messages.
     */
    protected bool $allowWriteAccess;

    public function __construct(int $chatId, int $messageId, int $buttonId, bool $allowWriteAccess)
    {
        $this->chatId           = $chatId;
        $this->messageId        = $messageId;
        $this->buttonId         = $buttonId;
        $this->allowWriteAccess = $allowWriteAccess;
    }

    public static function fromArray(array $array): GetLoginUrl
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
            $array['allow_write_access'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'message_id'         => $this->messageId,
            'button_id'          => $this->buttonId,
            'allow_write_access' => $this->allowWriteAccess,
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

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }
}
