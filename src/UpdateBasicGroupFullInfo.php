<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some data from basicGroupFullInfo has been changed.
 */
class UpdateBasicGroupFullInfo extends Update
{
    public const TYPE_NAME = 'updateBasicGroupFullInfo';

    /**
     * Identifier of a basic group.
     *
     * @var int
     */
    protected int $basicGroupId;

    /**
     * New full information about the group.
     *
     * @var BasicGroupFullInfo
     */
    protected BasicGroupFullInfo $basicGroupFullInfo;

    public function __construct(int $basicGroupId, BasicGroupFullInfo $basicGroupFullInfo)
    {
        parent::__construct();

        $this->basicGroupId       = $basicGroupId;
        $this->basicGroupFullInfo = $basicGroupFullInfo;
    }

    public static function fromArray(array $array): UpdateBasicGroupFullInfo
    {
        return new static(
            $array['basic_group_id'],
            TdSchemaRegistry::fromArray($array['basic_group_full_info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'basic_group_id'        => $this->basicGroupId,
            'basic_group_full_info' => $this->basicGroupFullInfo->typeSerialize(),
        ];
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function getBasicGroupFullInfo(): BasicGroupFullInfo
    {
        return $this->basicGroupFullInfo;
    }
}
