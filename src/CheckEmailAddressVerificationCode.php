<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the email address verification code for Telegram Passport.
 */
class CheckEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'checkEmailAddressVerificationCode';

    /**
     * Verification code.
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckEmailAddressVerificationCode
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
