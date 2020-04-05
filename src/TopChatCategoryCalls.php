<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A category containing frequently used chats used for calls.
 */
class TopChatCategoryCalls extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryCalls';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryCalls
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
