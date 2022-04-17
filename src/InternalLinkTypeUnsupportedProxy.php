<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to an unsupported proxy. An alert can be shown to the user
 */
class InternalLinkTypeUnsupportedProxy extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUnsupportedProxy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeUnsupportedProxy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
