<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The content should be right-aligned
 */
class PageBlockHorizontalAlignmentRight extends PageBlockHorizontalAlignment
{
    public const TYPE_NAME = 'pageBlockHorizontalAlignmentRight';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockHorizontalAlignmentRight
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
