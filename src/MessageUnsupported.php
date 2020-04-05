<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Message content that is not supported by the client.
 */
class MessageUnsupported extends MessageContent
{
    public const TYPE_NAME = 'messageUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
