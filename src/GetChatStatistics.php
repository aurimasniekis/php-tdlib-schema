<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns detailed statistics about a chat. Currently this method can be used only for supergroups and channels. Can be used only if SupergroupFullInfo.can_get_statistics == true
 */
class GetChatStatistics extends TdFunction
{
    public const TYPE_NAME = 'getChatStatistics';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true if a dark theme is used by the application
     *
     * @var bool
     */
    protected bool $isDark;

    public function __construct(int $chatId, bool $isDark)
    {
        $this->chatId = $chatId;
        $this->isDark = $isDark;
    }

    public static function fromArray(array $array): GetChatStatistics
    {
        return new static(
            $array['chat_id'],
            $array['is_dark'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'is_dark' => $this->isDark,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }
}
