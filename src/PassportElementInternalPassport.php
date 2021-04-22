<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's internal passport.
 */
class PassportElementInternalPassport extends PassportElement
{
    public const TYPE_NAME = 'passportElementInternalPassport';

    /**
     * Internal passport.
     */
    protected IdentityDocument $internalPassport;

    public function __construct(IdentityDocument $internalPassport)
    {
        parent::__construct();

        $this->internalPassport = $internalPassport;
    }

    public static function fromArray(array $array): PassportElementInternalPassport
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

    public function getInternalPassport(): IdentityDocument
    {
        return $this->internalPassport;
    }
}
