<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the value of an option. (Check the list of available options on https://core.telegram.org/tdlib/options.) Only writable options can be set. Can be called before authorization.
 */
class SetOption extends TdFunction
{
    public const TYPE_NAME = 'setOption';

    /**
     * The name of the option.
     *
     * @var string
     */
    protected string $name;

    /**
     * The new value of the option.
     *
     * @var OptionValue
     */
    protected OptionValue $value;

    public function __construct(string $name, OptionValue $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }

    public static function fromArray(array $array): SetOption
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['value']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'value' => $this->value->typeSerialize(),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): OptionValue
    {
        return $this->value;
    }
}
