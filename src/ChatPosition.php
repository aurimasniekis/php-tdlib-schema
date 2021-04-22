<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a position of a chat in a chat list
 */
class ChatPosition extends TdObject
{
    public const TYPE_NAME = 'chatPosition';

    /**
     * The chat list
     *
     * @var ChatList
     */
    protected ChatList $list;

    /**
     * A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order
     *
     * @var string
     */
    protected string $order;

    /**
     * True, if the chat is pinned in the chat list
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Source of the chat in the chat list; may be null
     *
     * @var ChatSource|null
     */
    protected ?ChatSource $source;

    public function __construct(ChatList $list, string $order, bool $isPinned, ?ChatSource $source)
    {
        $this->list = $list;
        $this->order = $order;
        $this->isPinned = $isPinned;
        $this->source = $source;
    }

    public static function fromArray(array $array): ChatPosition
    {
        return new static(
            TdSchemaRegistry::fromArray($array['list']),
            $array['order'],
            $array['is_pinned'],
            (isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'list' => $this->list->typeSerialize(),
            'order' => $this->order,
            'is_pinned' => $this->isPinned,
            'source' => (isset($this->source) ? $this->source : null),
        ];
    }

    public function getList(): ChatList
    {
        return $this->list;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getSource(): ?ChatSource
    {
        return $this->source;
    }
}
