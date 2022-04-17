<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the ability of users to save, forward, or copy chat content. Supported only for basic groups, supergroups and channels. Requires owner privileges
 */
class ToggleChatHasProtectedContent extends TdFunction
{
    public const TYPE_NAME = 'toggleChatHasProtectedContent';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * True, if chat content can't be saved locally, forwarded, or copied
     *
     * @var bool
     */
    protected bool $hasProtectedContent;

    public function __construct(int $chatId, bool $hasProtectedContent)
    {
        $this->chatId = $chatId;
        $this->hasProtectedContent = $hasProtectedContent;
    }

    public static function fromArray(array $array): ToggleChatHasProtectedContent
    {
        return new static(
            $array['chat_id'],
            $array['has_protected_content'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'has_protected_content' => $this->hasProtectedContent,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }
}
