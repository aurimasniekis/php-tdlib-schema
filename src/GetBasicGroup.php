<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a basic group by its identifier. This is an offline request if the current user is not a bot.
 */
class GetBasicGroup extends TdFunction
{
    public const TYPE_NAME = 'getBasicGroup';

    /**
     * Basic group identifier.
     *
     * @var int
     */
    protected int $basicGroupId;

    public function __construct(int $basicGroupId)
    {
        $this->basicGroupId = $basicGroupId;
    }

    public static function fromArray(array $array): GetBasicGroup
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
