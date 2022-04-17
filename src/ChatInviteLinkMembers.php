<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of chat members joined a chat via an invite link
 */
class ChatInviteLinkMembers extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkMembers';

    /**
     * Approximate total count of chat members found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of chat members, joined a chat via an invite link
     *
     * @var ChatInviteLinkMember[]
     */
    protected array $members;

    public function __construct(int $totalCount, array $members)
    {
        $this->totalCount = $totalCount;
        $this->members = $members;
    }

    public static function fromArray(array $array): ChatInviteLinkMembers
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
