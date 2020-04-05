<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a game.
 */
class MessageGame extends MessageContent
{
    public const TYPE_NAME = 'messageGame';

    /**
     * The game description.
     *
     * @var Game
     */
    protected Game $game;

    public function __construct(Game $game)
    {
        parent::__construct();

        $this->game = $game;
    }

    public static function fromArray(array $array): MessageGame
    {
        return new static(
            TdSchemaRegistry::fromArray($array['game']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'game'  => $this->game->typeSerialize(),
        ];
    }

    public function getGame(): Game
    {
        return $this->game;
    }
}
