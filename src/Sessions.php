<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of sessions
 */
class Sessions extends TdObject
{
    public const TYPE_NAME = 'sessions';

    /**
     * List of sessions
     *
     * @var Session[]
     */
    protected array $sessions;

    public function __construct(array $sessions)
    {
        $this->sessions = $sessions;
    }

    public static function fromArray(array $array): Sessions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['sessions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->sessions),
        ];
    }

    public function getSessions(): array
    {
        return $this->sessions;
    }
}
