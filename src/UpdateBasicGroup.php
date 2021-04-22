<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some data of a basic group has changed. This update is guaranteed to come before the basic group identifier is returned to the application
 */
class UpdateBasicGroup extends Update
{
    public const TYPE_NAME = 'updateBasicGroup';

    /**
     * New data about the group
     *
     * @var BasicGroup
     */
    protected BasicGroup $basicGroup;

    public function __construct(BasicGroup $basicGroup)
    {
        parent::__construct();

        $this->basicGroup = $basicGroup;
    }

    public static function fromArray(array $array): UpdateBasicGroup
    {
        return new static(
            TdSchemaRegistry::fromArray($array['basic_group']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'basic_group' => $this->basicGroup->typeSerialize(),
        ];
    }

    public function getBasicGroup(): BasicGroup
    {
        return $this->basicGroup;
    }
}
