<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has started to play a game.
 */
class ChatActionStartPlayingGame extends ChatAction
{
    public const TYPE_NAME = 'chatActionStartPlayingGame';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionStartPlayingGame
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
