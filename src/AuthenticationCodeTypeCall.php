<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An authentication code is delivered via a phone call to the specified phone number.
 */
class AuthenticationCodeTypeCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeCall';

    /**
     * Length of the code.
     */
    protected int $length;

    public function __construct(int $length)
    {
        parent::__construct();

        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeCall
    {
        return new static(
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
        ];
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
