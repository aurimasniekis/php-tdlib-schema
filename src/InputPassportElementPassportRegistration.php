<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's passport registration
 */
class InputPassportElementPassportRegistration extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPassportRegistration';

    /**
     * The passport registration page to be saved
     *
     * @var InputPersonalDocument
     */
    protected InputPersonalDocument $passportRegistration;

    public function __construct(InputPersonalDocument $passportRegistration)
    {
        parent::__construct();

        $this->passportRegistration = $passportRegistration;
    }

    public static function fromArray(array $array): InputPassportElementPassportRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport_registration']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'passport_registration' => $this->passportRegistration->typeSerialize(),
        ];
    }

    public function getPassportRegistration(): InputPersonalDocument
    {
        return $this->passportRegistration;
    }
}
