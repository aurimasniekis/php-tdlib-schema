<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the authentication code. Works only when the current authorization state is authorizationStateWaitCode
 */
class CheckAuthenticationCode extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationCode';

    /**
     * The verification code received via SMS, Telegram message, phone call, or flash call
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckAuthenticationCode
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
