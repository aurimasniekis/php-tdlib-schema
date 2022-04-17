<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has canceled the previous action
 */
class ChatActionCancel extends ChatAction
{
    public const TYPE_NAME = 'chatActionCancel';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionCancel
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
