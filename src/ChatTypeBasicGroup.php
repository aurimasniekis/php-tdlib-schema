<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A basic group (i.e., a chat with 0-200 other users)
 */
class ChatTypeBasicGroup extends ChatType
{
    public const TYPE_NAME = 'chatTypeBasicGroup';

    /**
     * Basic group identifier
     *
     * @var int
     */
    protected int $basicGroupId;

    public function __construct(int $basicGroupId)
    {
        parent::__construct();

        $this->basicGroupId = $basicGroupId;
    }

    public static function fromArray(array $array): ChatTypeBasicGroup
    {
        return new static(
            $array['basic_group_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
        ];
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }
}
