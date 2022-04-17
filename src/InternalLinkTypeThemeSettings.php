<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to the theme settings section of the app
 */
class InternalLinkTypeThemeSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeThemeSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeThemeSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
