<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of messages
 */
class Messages extends TdObject
{
    public const TYPE_NAME = 'messages';

    /**
     * Approximate total count of messages found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of messages; messages may be null
     *
     * @var Message[]|null
     */
    protected ?array $messages;

    public function __construct(int $totalCount, ?array $messages)
    {
        $this->totalCount = $totalCount;
        $this->messages = $messages;
    }

    public static function fromArray(array $array): Messages
    {
        return new static(
            $array['total_count'],
            (isset($array['messages']) ? array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            (isset($this->messages) ? array_map(fn($x) => $x->typeSerialize(), $this->messages) : null),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getMessages(): ?array
    {
        return $this->messages;
    }
}
