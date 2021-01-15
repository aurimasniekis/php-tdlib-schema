<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's internal passport.
 */
class InputPassportElementInternalPassport extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementInternalPassport';

    /**
     * The internal passport to be saved.
     *
     * @var InputIdentityDocument
     */
    protected InputIdentityDocument $internalPassport;

    public function __construct(InputIdentityDocument $internalPassport)
    {
        parent::__construct();

        $this->internalPassport = $internalPassport;
    }

    public static function fromArray(array $array): InputPassportElementInternalPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['internal_passport']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'internal_passport' => $this->internalPassport->typeSerialize(),
        ];
    }

    public function getInternalPassport(): InputIdentityDocument
    {
        return $this->internalPassport;
    }
}
