<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the authentication password for correctness. Works only when the current authorization state is authorizationStateWaitPassword.
 */
class CheckAuthenticationPassword extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationPassword';

    /**
     * The password to check.
     */
    protected string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public static function fromArray(array $array): CheckAuthenticationPassword
    {
        return new static(
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
