<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The best available video quality
 */
class GroupCallVideoQualityFull extends GroupCallVideoQuality
{
    public const TYPE_NAME = 'groupCallVideoQualityFull';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallVideoQualityFull
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
