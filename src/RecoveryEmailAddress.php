<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the current recovery email address.
 */
class RecoveryEmailAddress extends TdObject
{
    public const TYPE_NAME = 'recoveryEmailAddress';

    /**
     * Recovery email address.
     *
     * @var string
     */
    protected string $recoveryEmailAddress;

    public function __construct(string $recoveryEmailAddress)
    {
        $this->recoveryEmailAddress = $recoveryEmailAddress;
    }

    public static function fromArray(array $array): RecoveryEmailAddress
    {
        return new static(
            $array['recovery_email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'recovery_email_address' => $this->recoveryEmailAddress,
        ];
    }

    public function getRecoveryEmailAddress(): string
    {
        return $this->recoveryEmailAddress;
    }
}
