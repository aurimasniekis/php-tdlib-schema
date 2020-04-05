<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has been authorized, but needs to enter a password to start using the application.
 */
class AuthorizationStateWaitPassword extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitPassword';

    /**
     * Hint for the password; may be empty.
     *
     * @var string
     */
    protected string $passwordHint;

    /**
     * True, if a recovery email address has been set up.
     *
     * @var bool
     */
    protected bool $hasRecoveryEmailAddress;

    /**
     * Pattern of the email address to which the recovery email was sent; empty until a recovery email has been sent.
     *
     * @var string
     */
    protected string $recoveryEmailAddressPattern;

    public function __construct(string $passwordHint, bool $hasRecoveryEmailAddress, string $recoveryEmailAddressPattern)
    {
        parent::__construct();

        $this->passwordHint                = $passwordHint;
        $this->hasRecoveryEmailAddress     = $hasRecoveryEmailAddress;
        $this->recoveryEmailAddressPattern = $recoveryEmailAddressPattern;
    }

    public static function fromArray(array $array): AuthorizationStateWaitPassword
    {
        return new static(
            $array['password_hint'],
            $array['has_recovery_email_address'],
            $array['recovery_email_address_pattern'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'password_hint'                  => $this->passwordHint,
            'has_recovery_email_address'     => $this->hasRecoveryEmailAddress,
            'recovery_email_address_pattern' => $this->recoveryEmailAddressPattern,
        ];
    }

    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    public function getRecoveryEmailAddressPattern(): string
    {
        return $this->recoveryEmailAddressPattern;
    }
}
