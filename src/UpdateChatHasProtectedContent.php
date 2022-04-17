<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat content was allowed or restricted for saving
 */
class UpdateChatHasProtectedContent extends Update
{
    public const TYPE_NAME = 'updateChatHasProtectedContent';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of has_protected_content
     *
     * @var bool
     */
    protected bool $hasProtectedContent;

    public function __construct(int $chatId, bool $hasProtectedContent)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->hasProtectedContent = $hasProtectedContent;
    }

    public static function fromArray(array $array): UpdateChatHasProtectedContent
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
