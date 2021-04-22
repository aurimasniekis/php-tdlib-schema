<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's passport registration pages.
 */
class PassportElementPassportRegistration extends PassportElement
{
    public const TYPE_NAME = 'passportElementPassportRegistration';

    /**
     * Passport registration pages.
     */
    protected PersonalDocument $passportRegistration;

    public function __construct(PersonalDocument $passportRegistration)
    {
        parent::__construct();

        $this->passportRegistration = $passportRegistration;
    }

    public static function fromArray(array $array): PassportElementPassportRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport_registration']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'passport_registration' => $this->passportRegistration->typeSerialize(),
        ];
    }

    public function getPassportRegistration(): PersonalDocument
    {
        return $this->passportRegistration;
    }
}
