<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Suggests the user to view a hint about the meaning of one and two check marks on sent messages
 */
class SuggestedActionViewChecksHint extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionViewChecksHint';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionViewChecksHint
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
