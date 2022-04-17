<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a game. Call searchPublicChat with the given bot username, check that the user is a bot, ask the current user to select a chat to send the game, and then call sendMessage with inputMessageGame
 */
class InternalLinkTypeGame extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeGame';

    /**
     * Username of the bot that owns the game
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * Short name of the game
     *
     * @var string
     */
    protected string $gameShortName;

    public function __construct(string $botUsername, string $gameShortName)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->gameShortName = $gameShortName;
    }

    public static function fromArray(array $array): InternalLinkTypeGame
    {
        return new static(
            $array['bot_username'],
            $array['game_short_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'game_short_name' => $this->gameShortName,
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }
}
