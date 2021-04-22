<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all website where the current user used Telegram to log in
 */
class GetConnectedWebsites extends TdFunction
{
    public const TYPE_NAME = 'getConnectedWebsites';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetConnectedWebsites
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
