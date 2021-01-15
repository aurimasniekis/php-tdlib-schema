<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An identity document to be saved to Telegram Passport.
 */
class InputIdentityDocument extends TdObject
{
    public const TYPE_NAME = 'inputIdentityDocument';

    /**
     * Document number; 1-24 characters.
     */
    protected string $number;

    /**
     * Document expiry date, if available.
     */
    protected Date $expiryDate;

    /**
     * Front side of the document.
     */
    protected InputFile $frontSide;

    /**
     * Reverse side of the document; only for driver license and identity card.
     */
    protected InputFile $reverseSide;

    /**
     * Selfie with the document, if available.
     */
    protected InputFile $selfie;

    /**
     * List of files containing a certified English translation of the document.
     *
     * @var InputFile[]
     */
    protected array $translation;

    public function __construct(string $number, Date $expiryDate, InputFile $frontSide, InputFile $reverseSide, InputFile $selfie, array $translation)
    {
        $this->number      = $number;
        $this->expiryDate  = $expiryDate;
        $this->frontSide   = $frontSide;
        $this->reverseSide = $reverseSide;
        $this->selfie      = $selfie;
        $this->translation = $translation;
    }

    public static function fromArray(array $array): InputIdentityDocument
    {
        return new static(
            $array['number'],
            TdSchemaRegistry::fromArray($array['expiry_date']),
            TdSchemaRegistry::fromArray($array['front_side']),
            TdSchemaRegistry::fromArray($array['reverse_side']),
            TdSchemaRegistry::fromArray($array['selfie']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'number'          => $this->number,
            'expiry_date'     => $this->expiryDate->typeSerialize(),
            'front_side'      => $this->frontSide->typeSerialize(),
            'reverse_side'    => $this->reverseSide->typeSerialize(),
            'selfie'          => $this->selfie->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->translation),
        ];
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpiryDate(): Date
    {
        return $this->expiryDate;
    }

    public function getFrontSide(): InputFile
    {
        return $this->frontSide;
    }

    public function getReverseSide(): InputFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): InputFile
    {
        return $this->selfie;
    }

    public function getTranslation(): array
    {
        return $this->translation;
    }
}
