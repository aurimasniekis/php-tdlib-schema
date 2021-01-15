<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns full information about a supergroup or a channel by its identifier, cached for up to 1 minute.
 */
class GetSupergroupFullInfo extends TdFunction
{
    public const TYPE_NAME = 'getSupergroupFullInfo';

    /**
     * Supergroup or channel identifier.
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): GetSupergroupFullInfo
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
