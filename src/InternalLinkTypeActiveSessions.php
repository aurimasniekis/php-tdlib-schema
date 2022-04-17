<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to the active sessions section of the app. Use getActiveSessions to handle the link
 */
class InternalLinkTypeActiveSessions extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeActiveSessions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeActiveSessions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
