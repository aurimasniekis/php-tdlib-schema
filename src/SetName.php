<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the first and last name of the current user
 */
class SetName extends TdFunction
{
    public const TYPE_NAME = 'setName';

    /**
     * The new value of the first name for the user; 1-64 characters
     *
     * @var string
     */
    protected string $firstName;

    /**
     * The new value of the optional last name for the user; 0-64 characters
     *
     * @var string
     */
    protected string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public static function fromArray(array $array): SetName
    {
        return new static(
            $array['first_name'],
            $array['last_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
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
