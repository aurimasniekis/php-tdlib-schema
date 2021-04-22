<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's driver license.
 */
class InputPassportElementDriverLicense extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementDriverLicense';

    /**
     * The driver license to be saved.
     */
    protected InputIdentityDocument $driverLicense;

    public function __construct(InputIdentityDocument $driverLicense)
    {
        parent::__construct();

        $this->driverLicense = $driverLicense;
    }

    public static function fromArray(array $array): InputPassportElementDriverLicense
    {
        return new static(
            TdSchemaRegistry::fromArray($array['driver_license']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'driver_license' => $this->driverLicense->typeSerialize(),
        ];
    }

    public function getDriverLicense(): InputIdentityDocument
    {
        return $this->driverLicense;
    }
}
