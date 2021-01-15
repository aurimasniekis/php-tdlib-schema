<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat is sponsored by the user's MTProxy server.
 */
class ChatSourceMtprotoProxy extends ChatSource
{
    public const TYPE_NAME = 'chatSourceMtprotoProxy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatSourceMtprotoProxy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
