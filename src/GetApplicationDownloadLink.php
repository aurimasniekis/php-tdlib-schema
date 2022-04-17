<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the link for downloading official Telegram application to be used when the current user invites friends to Telegram
 */
class GetApplicationDownloadLink extends TdFunction
{
    public const TYPE_NAME = 'getApplicationDownloadLink';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetApplicationDownloadLink
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
