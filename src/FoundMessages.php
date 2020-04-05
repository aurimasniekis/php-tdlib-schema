<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of messages found by a search.
 */
class FoundMessages extends TdObject
{
    public const TYPE_NAME = 'foundMessages';

    /**
     * List of messages.
     *
     * @var Message[]
     */
    protected array $messages;

    /**
     * Value to pass as from_search_id to get more results.
     *
     * @var int
     */
    protected int $nextFromSearchId;

    public function __construct(array $messages, int $nextFromSearchId)
    {
        $this->messages         = $messages;
        $this->nextFromSearchId = $nextFromSearchId;
    }

    public static function fromArray(array $array): FoundMessages
    {
        return new static(
            array_map(fn ($x) => Message::fromArray($x), $array['messages']),
            $array['next_from_search_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            array_map(fn ($x)     => $x->typeSerialize(), $this->messages),
            'next_from_search_id' => $this->nextFromSearchId,
        ];
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getNextFromSearchId(): int
    {
        return $this->nextFromSearchId;
    }
}
