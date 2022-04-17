<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an action suggested to the current user
 */
class SuggestedAction extends TdObject
{
    public const TYPE_NAME = 'SuggestedAction';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SuggestedAction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
