<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of message senders
 */
class MessageSenders extends TdObject
{
    public const TYPE_NAME = 'messageSenders';

    /**
     * Approximate total count of messages senders found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of message senders
     *
     * @var MessageSender[]
     */
    protected array $senders;

    public function __construct(int $totalCount, array $senders)
    {
        $this->totalCount = $totalCount;
        $this->senders = $senders;
    }

    public static function fromArray(array $array): MessageSenders
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['senders']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->senders),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getSenders(): array
    {
        return $this->senders;
    }
}
