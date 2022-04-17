<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an existing chat corresponding to a known basic group
 */
class CreateBasicGroupChat extends TdFunction
{
    public const TYPE_NAME = 'createBasicGroupChat';

    /**
     * Basic group identifier
     *
     * @var int
     */
    protected int $basicGroupId;

    /**
     * If true, the chat will be created without network request. In this case all information about the chat except its type, title and photo can be incorrect
     *
     * @var bool
     */
    protected bool $force;

    public function __construct(int $basicGroupId, bool $force)
    {
        $this->basicGroupId = $basicGroupId;
        $this->force = $force;
    }

    public static function fromArray(array $array): CreateBasicGroupChat
    {
        return new static(
            $array['basic_group_id'],
            $array['force'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
            'force' => $this->force,
        ];
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function getForce(): bool
    {
        return $this->force;
    }
}
