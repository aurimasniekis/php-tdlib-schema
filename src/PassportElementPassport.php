<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's passport.
 */
class PassportElementPassport extends PassportElement
{
    public const TYPE_NAME = 'passportElementPassport';

    /**
     * Passport.
     *
     * @var IdentityDocument
     */
    protected IdentityDocument $passport;

    public function __construct(IdentityDocument $passport)
    {
        parent::__construct();

        $this->passport = $passport;
    }

    public static function fromArray(array $array): PassportElementPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'passport' => $this->passport->typeSerialize(),
        ];
    }

    public function getPassport(): IdentityDocument
    {
        return $this->passport;
    }
}
