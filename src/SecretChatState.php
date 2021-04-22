<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the current secret chat state.
 */
class SecretChatState extends TdObject
{
    public const TYPE_NAME = 'SecretChatState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SecretChatState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
