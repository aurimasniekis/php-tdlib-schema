<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Upgrades supergroup to a broadcast group; requires owner privileges in the supergroup
 */
class ToggleSupergroupIsBroadcastGroup extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupIsBroadcastGroup';

    /**
     * Identifier of the supergroup
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): ToggleSupergroupIsBroadcastGroup
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
