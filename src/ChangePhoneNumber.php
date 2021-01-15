<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the phone number of the user and sends an authentication code to the user's new phone number. On success, returns information about the sent code.
 */
class ChangePhoneNumber extends TdFunction
{
    public const TYPE_NAME = 'changePhoneNumber';

    /**
     * The new phone number of the user in international format.
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

    public function __construct(string $phoneNumber, PhoneNumberAuthenticationSettings $settings)
    {
        $this->phoneNumber = $phoneNumber;
        $this->settings    = $settings;
    }

    public static function fromArray(array $array): ChangePhoneNumber
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'settings'     => $this->settings->typeSerialize(),
        ];
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
