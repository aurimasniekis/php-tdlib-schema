<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns list of available TDLib internal log tags, for example, ["actor", "binlog", "connections", "notifications", "proxy"]. Can be called synchronously
 */
class GetLogTags extends TdFunction
{
    public const TYPE_NAME = 'getLogTags';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetLogTags
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
