<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The title of a chat was changed.
 */
class UpdateChatTitle extends Update
{
    public const TYPE_NAME = 'updateChatTitle';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * The new chat title.
     */
    protected string $title;

    public function __construct(int $chatId, string $title)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->title  = $title;
    }

    public static function fromArray(array $array): UpdateChatTitle
    {
        return new static(
            $array['chat_id'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'title'   => $this->title,
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
