<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Finishes user registration. Works only when the current authorization state is authorizationStateWaitRegistration.
 */
class RegisterUser extends TdFunction
{
    public const TYPE_NAME = 'registerUser';

    /**
     * The first name of the user; 1-64 characters.
     */
    protected string $firstName;

    /**
     * The last name of the user; 0-64 characters.
     */
    protected string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public static function fromArray(array $array): RegisterUser
    {
        return new static(
            $array['first_name'],
            $array['last_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
