<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks whether a password recovery code sent to an email address is valid. Works only when the current authorization state is authorizationStateWaitPassword
 */
class CheckAuthenticationPasswordRecoveryCode extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationPasswordRecoveryCode';

    /**
     * Recovery code to check
     *
     * @var string
     */
    protected string $recoveryCode;

    public function __construct(string $recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
    }

    public static function fromArray(array $array): CheckAuthenticationPasswordRecoveryCode
    {
        return new static(
            $array['recovery_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'recovery_code' => $this->recoveryCode,
        ];
    }

    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
    }
}
