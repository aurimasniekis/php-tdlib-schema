<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains settings for the authentication of the user's phone number
 */
class PhoneNumberAuthenticationSettings extends TdObject
{
    public const TYPE_NAME = 'phoneNumberAuthenticationSettings';

    /**
     * Pass true if the authentication code may be sent via a flash call to the specified phone number
     *
     * @var bool
     */
    protected bool $allowFlashCall;

    /**
     * Pass true if the authentication code may be sent via a missed call to the specified phone number
     *
     * @var bool
     */
    protected bool $allowMissedCall;

    /**
     * Pass true if the authenticated phone number is used on the current device
     *
     * @var bool
     */
    protected bool $isCurrentPhoneNumber;

    /**
     * For official applications only. True, if the application can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details
     *
     * @var bool
     */
    protected bool $allowSmsRetrieverApi;

    /**
     * List of up to 20 authentication tokens, recently received in updateOption("authentication_token") in previously logged out sessions
     *
     * @var string[]
     */
    protected array $authenticationTokens;

    public function __construct(
        bool $allowFlashCall,
        bool $allowMissedCall,
        bool $isCurrentPhoneNumber,
        bool $allowSmsRetrieverApi,
        array $authenticationTokens
    ) {
        $this->allowFlashCall = $allowFlashCall;
        $this->allowMissedCall = $allowMissedCall;
        $this->isCurrentPhoneNumber = $isCurrentPhoneNumber;
        $this->allowSmsRetrieverApi = $allowSmsRetrieverApi;
        $this->authenticationTokens = $authenticationTokens;
    }

    public static function fromArray(array $array): PhoneNumberAuthenticationSettings
    {
        return new static(
            $array['allow_flash_call'],
            $array['allow_missed_call'],
            $array['is_current_phone_number'],
            $array['allow_sms_retriever_api'],
            $array['authentication_tokens'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'allow_flash_call' => $this->allowFlashCall,
            'allow_missed_call' => $this->allowMissedCall,
            'is_current_phone_number' => $this->isCurrentPhoneNumber,
            'allow_sms_retriever_api' => $this->allowSmsRetrieverApi,
            'authentication_tokens' => $this->authenticationTokens,
        ];
    }

    public function getAllowFlashCall(): bool
    {
        return $this->allowFlashCall;
    }

    public function getAllowMissedCall(): bool
    {
        return $this->allowMissedCall;
    }

    public function getIsCurrentPhoneNumber(): bool
    {
        return $this->isCurrentPhoneNumber;
    }

    public function getAllowSmsRetrieverApi(): bool
    {
        return $this->allowSmsRetrieverApi;
    }

    public function getAuthenticationTokens(): array
    {
        return $this->authenticationTokens;
    }
}
