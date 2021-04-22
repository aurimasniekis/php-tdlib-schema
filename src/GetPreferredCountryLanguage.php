<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an IETF language tag of the language preferred in the country, which should be used to fill native fields in Telegram Passport personal details. Returns a 404 error if unknown
 */
class GetPreferredCountryLanguage extends TdFunction
{
    public const TYPE_NAME = 'getPreferredCountryLanguage';

    /**
     * A two-letter ISO 3166-1 alpha-2 country code
     *
     * @var string
     */
    protected string $countryCode;

    public function __construct(string $countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public static function fromArray(array $array): GetPreferredCountryLanguage
    {
        return new static(
            $array['country_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'country_code' => $this->countryCode,
        ];
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}
