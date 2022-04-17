<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a game; not supported for channels or secret chats
 */
class InputMessageGame extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageGame';

    /**
     * User identifier of the bot that owns the game
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Short name of the game
     *
     * @var string
     */
    protected string $gameShortName;

    public function __construct(int $botUserId, string $gameShortName)
    {
        parent::__construct();

        $this->botUserId = $botUserId;
        $this->gameShortName = $gameShortName;
    }

    public static function fromArray(array $array): InputMessageGame
    {
        return new static(
            $array['bot_user_id'],
            $array['game_short_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'game_short_name' => $this->gameShortName,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }
}
