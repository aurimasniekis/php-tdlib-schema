<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a block of an instant view web page
 */
class PageBlock extends TdObject
{
    public const TYPE_NAME = 'PageBlock';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PageBlock
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
