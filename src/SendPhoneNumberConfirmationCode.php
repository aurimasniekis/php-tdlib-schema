<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends phone number confirmation code. Should be called when user presses "https://t.me/confirmphone?phone=*******&hash=**********" or "tg://confirmphone?phone=*******&hash=**********" link.
 */
class SendPhoneNumberConfirmationCode extends TdFunction
{
    public const TYPE_NAME = 'sendPhoneNumberConfirmationCode';

    /**
     * Value of the "hash" parameter from the link.
     *
     * @var string
     */
    protected string $hash;

    /**
     * Value of the "phone" parameter from the link.
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * Settings for the authentication of the user's phone number.
     *
     * @var PhoneNumberAuthenticationSettings
     */
    protected PhoneNumberAuthenticationSettings $settings;

    public function __construct(string $hash, string $phoneNumber, PhoneNumberAuthenticationSettings $settings)
    {
        $this->hash        = $hash;
        $this->phoneNumber = $phoneNumber;
        $this->settings    = $settings;
    }

    public static function fromArray(array $array): SendPhoneNumberConfirmationCode
    {
        return new static(
            $array['hash'],
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'hash'         => $this->hash,
            'phone_number' => $this->phoneNumber,
            'settings'     => $this->settings->typeSerialize(),
        ];
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getSettings(): PhoneNumberAuthenticationSettings
    {
        return $this->settings;
    }
}
