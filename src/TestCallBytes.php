<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the received bytes; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallBytes extends TdFunction
{
    public const TYPE_NAME = 'testCallBytes';

    /**
     * Bytes to return.
     */
    protected string $x;

    public function __construct(string $x)
    {
        $this->x = $x;
    }

    public static function fromArray(array $array): TestCallBytes
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

    public function getX(): string
    {
        return $this->x;
    }
}
