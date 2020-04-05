<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info rights.
 */
class SetChatDescription extends TdFunction
{
    public const TYPE_NAME = 'setChatDescription';

    /**
     * Identifier of the chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New chat description; 0-255 characters.
     *
     * @var string
     */
    protected string $description;

    public function __construct(int $chatId, string $description)
    {
        $this->chatId      = $chatId;
        $this->description = $description;
    }

    public static function fromArray(array $array): SetChatDescription
    {
        return new static(
            $array['chat_id'],
            $array['param_description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'param_description' => $this->description,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
