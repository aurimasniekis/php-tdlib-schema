<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a basic group of 0-200 users (must be upgraded to a supergroup to accommodate more than 200 users).
 */
class BasicGroup extends TdObject
{
    public const TYPE_NAME = 'basicGroup';

    /**
     * Group identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Number of members in the group.
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * Status of the current user in the group.
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    /**
     * True, if the group is active.
     *
     * @var bool
     */
    protected bool $isActive;

    /**
     * Identifier of the supergroup to which this group was upgraded; 0 if none.
     *
     * @var int
     */
    protected int $upgradedToSupergroupId;

    public function __construct(int $id, int $memberCount, ChatMemberStatus $status, bool $isActive, int $upgradedToSupergroupId)
    {
        $this->id                     = $id;
        $this->memberCount            = $memberCount;
        $this->status                 = $status;
        $this->isActive               = $isActive;
        $this->upgradedToSupergroupId = $upgradedToSupergroupId;
    }

    public static function fromArray(array $array): BasicGroup
    {
        return new static(
            $array['id'],
            $array['member_count'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['is_active'],
            $array['upgraded_to_supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'id'                        => $this->id,
            'member_count'              => $this->memberCount,
            'status'                    => $this->status->typeSerialize(),
            'is_active'                 => $this->isActive,
            'upgraded_to_supergroup_id' => $this->upgradedToSupergroupId,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getUpgradedToSupergroupId(): int
    {
        return $this->upgradedToSupergroupId;
    }
}
