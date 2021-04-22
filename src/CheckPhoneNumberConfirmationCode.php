<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks phone number confirmation code.
 */
class CheckPhoneNumberConfirmationCode extends TdFunction
{
    public const TYPE_NAME = 'checkPhoneNumberConfirmationCode';

    /**
     * The phone number confirmation code.
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckPhoneNumberConfirmationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
