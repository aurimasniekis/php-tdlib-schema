<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of emoji
 */
class Emojis extends TdObject
{
    public const TYPE_NAME = 'emojis';

    /**
     * List of emojis
     *
     * @var string[]
     */
    protected array $emojis;

    public function __construct(array $emojis)
    {
        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): Emojis
    {
        return new static(
            $array['emojis'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }
}
