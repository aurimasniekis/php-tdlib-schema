<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of chat members
 */
class ChatMembers extends TdObject
{
    public const TYPE_NAME = 'chatMembers';

    /**
     * Approximate total count of chat members found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * A list of chat members
     *
     * @var ChatMember[]
     */
    protected array $members;

    public function __construct(int $totalCount, array $members)
    {
        $this->totalCount = $totalCount;
        $this->members = $members;
    }

    public static function fromArray(array $array): ChatMembers
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->members),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getMembers(): array
    {
        return $this->members;
    }
}
