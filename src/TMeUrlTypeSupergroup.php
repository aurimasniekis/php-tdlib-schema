<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A URL linking to a public supergroup or channel
 */
class TMeUrlTypeSupergroup extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeSupergroup';

    /**
     * Identifier of the supergroup or channel
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        parent::__construct();

        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): TMeUrlTypeSupergroup
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
