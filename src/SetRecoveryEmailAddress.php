<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the 2-step verification recovery email address of the user. If a new recovery email address is specified, then the change will not be applied until the new recovery email address is confirmed. If new_recovery_email_address is the same as the email address that is currently set up, this call succeeds immediately and aborts all other requests waiting for an email confirmation.
 */
class SetRecoveryEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'setRecoveryEmailAddress';

    /**
     * Password of the current user.
     *
     * @var string
     */
    protected string $password;

    /**
     * New recovery email address.
     *
     * @var string
     */
    protected string $newRecoveryEmailAddress;

    public function __construct(string $password, string $newRecoveryEmailAddress)
    {
        $this->password                = $password;
        $this->newRecoveryEmailAddress = $newRecoveryEmailAddress;
    }

    public static function fromArray(array $array): SetRecoveryEmailAddress
    {
        return new static(
            $array['password'],
            $array['new_recovery_email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'password'                   => $this->password,
            'new_recovery_email_address' => $this->newRecoveryEmailAddress,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }
}
