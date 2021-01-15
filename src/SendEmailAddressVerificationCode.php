<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a code to verify an email address to be added to a user's Telegram Passport.
 */
class SendEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'sendEmailAddressVerificationCode';

    /**
     * Email address.
     */
    protected string $emailAddress;

    public function __construct(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): SendEmailAddressVerificationCode
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
