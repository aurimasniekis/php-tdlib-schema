<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's email address.
 */
class InputPassportElementEmailAddress extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementEmailAddress';

    /**
     * The email address to be saved.
     *
     * @var string
     */
    protected string $emailAddress;

    public function __construct(string $emailAddress)
    {
        parent::__construct();

        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): InputPassportElementEmailAddress
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
