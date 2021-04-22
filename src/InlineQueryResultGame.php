<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents information about a game
 */
class InlineQueryResultGame extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultGame';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Game result
     *
     * @var Game
     */
    protected Game $game;

    public function __construct(string $id, Game $game)
    {
        parent::__construct();

        $this->id = $id;
        $this->game = $game;
    }

    public static function fromArray(array $array): InlineQueryResultGame
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['game']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'game' => $this->game->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getGame(): Game
    {
        return $this->game;
    }
}
