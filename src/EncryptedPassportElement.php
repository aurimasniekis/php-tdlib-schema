<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about an encrypted Telegram Passport element; for bots only
 */
class EncryptedPassportElement extends TdObject
{
    public const TYPE_NAME = 'encryptedPassportElement';

    /**
     * Type of Telegram Passport element
     *
     * @var PassportElementType
     */
    protected PassportElementType $type;

    /**
     * Encrypted JSON-encoded data about the user
     *
     * @var string
     */
    protected string $data;

    /**
     * The front side of an identity document
     *
     * @var DatedFile
     */
    protected DatedFile $frontSide;

    /**
     * The reverse side of an identity document; may be null
     *
     * @var DatedFile|null
     */
    protected ?DatedFile $reverseSide;

    /**
     * Selfie with the document; may be null
     *
     * @var DatedFile|null
     */
    protected ?DatedFile $selfie;

    /**
     * List of files containing a certified English translation of the document
     *
     * @var DatedFile[]
     */
    protected array $translation;

    /**
     * List of attached files
     *
     * @var DatedFile[]
     */
    protected array $files;

    /**
     * Unencrypted data, phone number or email address
     *
     * @var string
     */
    protected string $value;

    /**
     * Hash of the entire element
     *
     * @var string
     */
    protected string $hash;

    public function __construct(
        PassportElementType $type,
        string $data,
        DatedFile $frontSide,
        ?DatedFile $reverseSide,
        ?DatedFile $selfie,
        array $translation,
        array $files,
        string $value,
        string $hash
    ) {
        $this->type = $type;
        $this->data = $data;
        $this->frontSide = $frontSide;
        $this->reverseSide = $reverseSide;
        $this->selfie = $selfie;
        $this->translation = $translation;
        $this->files = $files;
        $this->value = $value;
        $this->hash = $hash;
    }

    public static function fromArray(array $array): EncryptedPassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['data'],
            TdSchemaRegistry::fromArray($array['front_side']),
            (isset($array['reverse_side']) ? TdSchemaRegistry::fromArray($array['reverse_side']) : null),
            (isset($array['selfie']) ? TdSchemaRegistry::fromArray($array['selfie']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['translation']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['files']),
            $array['value'],
            $array['hash'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'data' => $this->data,
            'front_side' => $this->frontSide->typeSerialize(),
            'reverse_side' => (isset($this->reverseSide) ? $this->reverseSide : null),
            'selfie' => (isset($this->selfie) ? $this->selfie : null),
            array_map(fn($x) => $x->typeSerialize(), $this->translation),
            array_map(fn($x) => $x->typeSerialize(), $this->files),
            'value' => $this->value,
            'hash' => $this->hash,
        ];
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getFrontSide(): DatedFile
    {
        return $this->frontSide;
    }

    public function getReverseSide(): ?DatedFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): ?DatedFile
    {
        return $this->selfie;
    }

    public function getTranslation(): array
    {
        return $this->translation;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getHash(): string
    {
        return $this->hash;
    }
}
