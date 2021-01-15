<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns detailed statistics about a message. Can be used only if Message.can_get_statistics == true.
 */
class GetMessageStatistics extends TdFunction
{
    public const TYPE_NAME = 'getMessageStatistics';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Message identifier.
     */
    protected int $messageId;

    /**
     * Pass true if a dark theme is used by the application.
     */
    protected bool $isDark;

    public function __construct(int $chatId, int $messageId, bool $isDark)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
        $this->isDark    = $isDark;
    }

    public static function fromArray(array $array): GetMessageStatistics
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_dark'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'is_dark'    => $this->isDark,
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

    public function getIsDark(): bool
    {
        return $this->isDark;
    }
}
