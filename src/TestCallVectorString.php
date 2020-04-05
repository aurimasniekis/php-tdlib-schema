<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the received vector of strings; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorString extends TdFunction
{
    public const TYPE_NAME = 'testCallVectorString';

    /**
     * Vector of strings to return.
     *
     * @var string[]
     */
    protected array $x;

    public function __construct(array $x)
    {
        $this->x = $x;
    }

    public static function fromArray(array $array): TestCallVectorString
    {
        return new static(
            $array['x'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x'     => $this->x,
        ];
    }

    public function getX(): array
    {
        return $this->x;
    }
}
