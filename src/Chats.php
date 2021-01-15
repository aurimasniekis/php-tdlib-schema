<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of chats.
 */
class Chats extends TdObject
{
    public const TYPE_NAME = 'chats';

    /**
     * List of chat identifiers.
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(array $chatIds)
    {
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): Chats
    {
        return new static(
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_ids' => $this->chatIds,
        ];
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }
}
