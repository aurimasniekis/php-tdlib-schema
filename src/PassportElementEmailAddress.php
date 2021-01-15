<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's email address.
 */
class PassportElementEmailAddress extends PassportElement
{
    public const TYPE_NAME = 'passportElementEmailAddress';

    /**
     * Email address.
     */
    protected string $emailAddress;

    public function __construct(string $emailAddress)
    {
        parent::__construct();

        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): PassportElementEmailAddress
    {
        return new static(
            $array['email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
        ];
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
