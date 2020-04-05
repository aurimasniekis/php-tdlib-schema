<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the current network type. Can be called before authorization. Calling this method forces all network connections to reopen, mitigating the delay in switching between different networks, so it should be called whenever the network is changed, even if the network type remains the same. Network type is used to check whether the library can use the network at all and also for collecting detailed network data usage statistics.
 */
class SetNetworkType extends TdFunction
{
    public const TYPE_NAME = 'setNetworkType';

    /**
     * The new network type. By default, networkTypeOther.
     *
     * @var NetworkType
     */
    protected NetworkType $type;

    public function __construct(NetworkType $type)
    {
        $this->type = $type;
    }

    public static function fromArray(array $array): SetNetworkType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getType(): NetworkType
    {
        return $this->type;
    }
}
