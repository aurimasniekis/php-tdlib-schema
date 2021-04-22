<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the value of an option by its name. (Check the list of available options on https://core.telegram.org/tdlib/options.) Can be called before authorization.
 */
class GetOption extends TdFunction
{
    public const TYPE_NAME = 'getOption';

    /**
     * The name of the option.
     */
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromArray(array $array): GetOption
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
