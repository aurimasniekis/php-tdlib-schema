<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat is public, because it has username
 */
class PublicChatTypeHasUsername extends PublicChatType
{
    public const TYPE_NAME = 'publicChatTypeHasUsername';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PublicChatTypeHasUsername
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
