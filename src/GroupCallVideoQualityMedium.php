<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The medium video quality
 */
class GroupCallVideoQualityMedium extends GroupCallVideoQuality
{
    public const TYPE_NAME = 'groupCallVideoQualityMedium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallVideoQualityMedium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
