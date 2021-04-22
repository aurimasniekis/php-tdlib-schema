<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A bot command, beginning with "/". This shouldn't be highlighted if there are no bots in the chat
 */
class TextEntityTypeBotCommand extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeBotCommand';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeBotCommand
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
