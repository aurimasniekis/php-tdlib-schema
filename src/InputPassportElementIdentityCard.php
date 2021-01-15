<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's identity card.
 */
class InputPassportElementIdentityCard extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementIdentityCard';

    /**
     * The identity card to be saved.
     *
     * @var InputIdentityDocument
     */
    protected InputIdentityDocument $identityCard;

    public function __construct(InputIdentityDocument $identityCard)
    {
        parent::__construct();

        $this->identityCard = $identityCard;
    }

    public static function fromArray(array $array): InputPassportElementIdentityCard
    {
        return new static(
            TdSchemaRegistry::fromArray($array['identity_card']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'identity_card' => $this->identityCard->typeSerialize(),
        ];
    }

    public function getIdentityCard(): InputIdentityDocument
    {
        return $this->identityCard;
    }
}
