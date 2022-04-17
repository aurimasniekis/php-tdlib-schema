<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a 2-step verification recovery email address that was previously set up. This method can be used to verify a password provided by the user
 */
class GetRecoveryEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'getRecoveryEmailAddress';

    /**
     * The password for the current user
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public static function fromArray(array $array): GetRecoveryEmailAddress
    {
        return new static(
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
