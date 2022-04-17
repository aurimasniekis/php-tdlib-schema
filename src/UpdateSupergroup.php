<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some data of a supergroup or a channel has changed. This update is guaranteed to come before the supergroup identifier is returned to the application
 */
class UpdateSupergroup extends Update
{
    public const TYPE_NAME = 'updateSupergroup';

    /**
     * New data about the supergroup
     *
     * @var Supergroup
     */
    protected Supergroup $supergroup;

    public function __construct(Supergroup $supergroup)
    {
        parent::__construct();

        $this->supergroup = $supergroup;
    }

    public static function fromArray(array $array): UpdateSupergroup
    {
        return new static(
            TdSchemaRegistry::fromArray($array['supergroup']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup' => $this->supergroup->typeSerialize(),
        ];
    }

    public function getSupergroup(): Supergroup
    {
        return $this->supergroup;
    }
}
