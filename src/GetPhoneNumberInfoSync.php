<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a phone number by its prefix synchronously. getCountries must be called at least once after changing localization to the specified language if properly localized country information is expected. Can be called synchronously
 */
class GetPhoneNumberInfoSync extends TdFunction
{
    public const TYPE_NAME = 'getPhoneNumberInfoSync';

    /**
     * A two-letter ISO 639-1 country code for country information localization
     *
     * @var string
     */
    protected string $languageCode;

    /**
     * The phone number prefix
     *
     * @var string
     */
    protected string $phoneNumberPrefix;

    public function __construct(string $languageCode, string $phoneNumberPrefix)
    {
        $this->languageCode = $languageCode;
        $this->phoneNumberPrefix = $phoneNumberPrefix;
    }

    public static function fromArray(array $array): GetPhoneNumberInfoSync
    {
        return new static(
            $array['language_code'],
            $array['phone_number_prefix'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_code' => $this->languageCode,
            'phone_number_prefix' => $this->phoneNumberPrefix,
        ];
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }
}
