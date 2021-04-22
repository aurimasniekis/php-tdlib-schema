<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A mask should be placed relatively to the chin
 */
class MaskPointChin extends MaskPoint
{
    public const TYPE_NAME = 'maskPointChin';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MaskPointChin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
