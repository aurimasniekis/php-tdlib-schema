<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The content must be top-aligned
 */
class PageBlockVerticalAlignmentTop extends PageBlockVerticalAlignment
{
    public const TYPE_NAME = 'pageBlockVerticalAlignmentTop';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVerticalAlignmentTop
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
