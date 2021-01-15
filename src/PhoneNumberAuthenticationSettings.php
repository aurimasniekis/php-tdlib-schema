<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains settings for the authentication of the user's phone number.
 */
class PhoneNumberAuthenticationSettings extends TdObject
{
    public const TYPE_NAME = 'phoneNumberAuthenticationSettings';

    /**
     * Pass true if the authentication code may be sent via flash call to the specified phone number.
     *
     * @var bool
     */
    protected bool $allowFlashCall;

    /**
     * Pass true if the authenticated phone number is used on the current device.
     *
     * @var bool
     */
    protected bool $isCurrentPhoneNumber;

    /**
     * For official applications only. True, if the app can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details.
     *
     * @var bool
     */
    protected bool $allowSmsRetrieverApi;

    public function __construct(bool $allowFlashCall, bool $isCurrentPhoneNumber, bool $allowSmsRetrieverApi)
    {
        $this->allowFlashCall       = $allowFlashCall;
        $this->isCurrentPhoneNumber = $isCurrentPhoneNumber;
        $this->allowSmsRetrieverApi = $allowSmsRetrieverApi;
    }

    public static function fromArray(array $array): PhoneNumberAuthenticationSettings
    {
        return new static(
            $array['allow_flash_call'],
            $array['is_current_phone_number'],
            $array['allow_sms_retriever_api'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'allow_flash_call'        => $this->allowFlashCall,
            'is_current_phone_number' => $this->isCurrentPhoneNumber,
            'allow_sms_retriever_api' => $this->allowSmsRetrieverApi,
        ];
    }

    public function getAllowFlashCall(): bool
    {
        return $this->allowFlashCall;
    }

    public function getIsCurrentPhoneNumber(): bool
    {
        return $this->isCurrentPhoneNumber;
    }

    public function getAllowSmsRetrieverApi(): bool
    {
        return $this->allowSmsRetrieverApi;
    }
}
