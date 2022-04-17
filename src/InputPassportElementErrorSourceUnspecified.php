<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The element contains an error in an unspecified place. The error will be considered resolved when new data is added
 */
class InputPassportElementErrorSourceUnspecified extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceUnspecified';

    /**
     * Current hash of the entire element
     *
     * @var string
     */
    protected string $elementHash;

    public function __construct(string $elementHash)
    {
        parent::__construct();

        $this->elementHash = $elementHash;
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceUnspecified
    {
        return new static(
            $array['element_hash'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'element_hash' => $this->elementHash,
        ];
    }

    public function getElementHash(): string
    {
        return $this->elementHash;
    }
}
