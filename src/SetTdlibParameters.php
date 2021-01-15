<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the parameters for TDLib initialization. Works only when the current authorization state is authorizationStateWaitTdlibParameters.
 */
class SetTdlibParameters extends TdFunction
{
    public const TYPE_NAME = 'setTdlibParameters';

    /**
     * Parameters.
     */
    protected TdlibParameters $parameters;

    public function __construct(TdlibParameters $parameters)
    {
        $this->parameters = $parameters;
    }

    public static function fromArray(array $array): SetTdlibParameters
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'parameters' => $this->parameters->typeSerialize(),
        ];
    }

    public function getParameters(): TdlibParameters
    {
        return $this->parameters;
    }
}
