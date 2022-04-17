<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the 2-step verification recovery email address verification code
 */
class CheckRecoveryEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'checkRecoveryEmailAddressCode';

    /**
     * Verification code to check
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckRecoveryEmailAddressCode
    {
        return new static(
            $array['code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code' => $this->code,
        ];
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
