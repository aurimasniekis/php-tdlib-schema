<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the chat title. Supported only for basic groups, supergroups and channels. Requires can_change_info rights
 */
class SetChatTitle extends TdFunction
{
    public const TYPE_NAME = 'setChatTitle';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New title of the chat; 1-128 characters
     *
     * @var string
     */
    protected string $title;

    public function __construct(int $chatId, string $title)
    {
        $this->chatId = $chatId;
        $this->title = $title;
    }

    public static function fromArray(array $array): SetChatTitle
    {
        return new static(
            $array['chat_id'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'title' => $this->title,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
