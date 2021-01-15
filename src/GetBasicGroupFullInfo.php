<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns full information about a basic group by its identifier.
 */
class GetBasicGroupFullInfo extends TdFunction
{
    public const TYPE_NAME = 'getBasicGroupFullInfo';

    /**
     * Basic group identifier.
     */
    protected int $basicGroupId;

    public function __construct(int $basicGroupId)
    {
        $this->basicGroupId = $basicGroupId;
    }

    public static function fromArray(array $array): GetBasicGroupFullInfo
    {
        return new static(
            $array['basic_group_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
        ];
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }
}
