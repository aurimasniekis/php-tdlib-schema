<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a data needed to subscribe for push notifications through registerDevice method. To use specific push notification service, you must specify the correct application platform and upload valid server authentication data at https://my.telegram.org.
 */
class DeviceToken extends TdObject
{
    public const TYPE_NAME = 'DeviceToken';

    public function __construct()
    {
    }

    public static function fromArray(array $array): DeviceToken
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
