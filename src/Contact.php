<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a user contact.
 */
class Contact extends TdObject
{
    public const TYPE_NAME = 'contact';

    /**
     * Phone number of the user.
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * First name of the user; 1-255 characters in length.
     *
     * @var string
     */
    protected string $firstName;

    /**
     * Last name of the user.
     *
     * @var string
     */
    protected string $lastName;

    /**
     * Additional data about the user in a form of vCard; 0-2048 bytes in length.
     *
     * @var string
     */
    protected string $vcard;

    /**
     * Identifier of the user, if known; otherwise 0.
     *
     * @var int
     */
    protected int $userId;

    public function __construct(string $phoneNumber, string $firstName, string $lastName, string $vcard, int $userId)
    {
        $this->phoneNumber = $phoneNumber;
        $this->firstName   = $firstName;
        $this->lastName    = $lastName;
        $this->vcard       = $vcard;
        $this->userId      = $userId;
    }

    public static function fromArray(array $array): Contact
    {
        return new static(
            $array['phone_number'],
            $array['first_name'],
            $array['last_name'],
            $array['vcard'],
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'vcard'        => $this->vcard,
            'user_id'      => $this->userId,
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getVcard(): string
    {
        return $this->vcard;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
