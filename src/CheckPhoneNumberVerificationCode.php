<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the phone number verification code for Telegram Passport
 */
class CheckPhoneNumberVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'checkPhoneNumberVerificationCode';

    /**
     * Verification code
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckPhoneNumberVerificationCode
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
