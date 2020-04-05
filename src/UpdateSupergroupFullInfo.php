<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some data from supergroupFullInfo has been changed.
 */
class UpdateSupergroupFullInfo extends Update
{
    public const TYPE_NAME = 'updateSupergroupFullInfo';

    /**
     * Identifier of the supergroup or channel.
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * New full information about the supergroup.
     *
     * @var SupergroupFullInfo
     */
    protected SupergroupFullInfo $supergroupFullInfo;

    public function __construct(int $supergroupId, SupergroupFullInfo $supergroupFullInfo)
    {
        parent::__construct();

        $this->supergroupId       = $supergroupId;
        $this->supergroupFullInfo = $supergroupFullInfo;
    }

    public static function fromArray(array $array): UpdateSupergroupFullInfo
    {
        return new static(
            $array['supergroup_id'],
            TdSchemaRegistry::fromArray($array['supergroup_full_info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'supergroup_id'        => $this->supergroupId,
            'supergroup_full_info' => $this->supergroupFullInfo->typeSerialize(),
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getSupergroupFullInfo(): SupergroupFullInfo
    {
        return $this->supergroupFullInfo;
    }
}
