<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Recovers the password using a recovery code sent to an email address that was previously set up.
 */
class RecoverPassword extends TdFunction
{
    public const TYPE_NAME = 'recoverPassword';

    /**
     * Recovery code to check.
     *
     * @var string
     */
    protected string $recoveryCode;

    public function __construct(string $recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
    }

    public static function fromArray(array $array): RecoverPassword
    {
        return new static(
            $array['recovery_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'recovery_code' => $this->recoveryCode,
        ];
    }

    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
    }
}
