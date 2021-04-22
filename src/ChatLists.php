<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of chat lists.
 */
class ChatLists extends TdObject
{
    public const TYPE_NAME = 'chatLists';

    /**
     * List of chat lists.
     *
     * @var ChatList[]
     */
    protected array $chatLists;

    public function __construct(array $chatLists)
    {
        $this->chatLists = $chatLists;
    }

    public static function fromArray(array $array): ChatLists
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['chat_lists']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->chatLists),
        ];
    }

    public function getChatLists(): array
    {
        return $this->chatLists;
    }
}
