<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The connection state has changed.
 */
class UpdateConnectionState extends Update
{
    public const TYPE_NAME = 'updateConnectionState';

    /**
     * The new connection state.
     *
     * @var ConnectionState
     */
    protected ConnectionState $state;

    public function __construct(ConnectionState $state)
    {
        parent::__construct();

        $this->state = $state;
    }

    public static function fromArray(array $array): UpdateConnectionState
    {
        return new static(
            TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'state' => $this->state->typeSerialize(),
        ];
    }

    public function getState(): ConnectionState
    {
        return $this->state;
    }
}
