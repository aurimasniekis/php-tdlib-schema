<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the squared received number; for testing only. This is an offline method. Can be called before authorization.
 */
class TestSquareInt extends TdFunction
{
    public const TYPE_NAME = 'testSquareInt';

    /**
     * Number to square.
     */
    protected int $x;

    public function __construct(int $x)
    {
        $this->x = $x;
    }

    public static function fromArray(array $array): TestSquareInt
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

    public function getX(): int
    {
        return $this->x;
    }
}
