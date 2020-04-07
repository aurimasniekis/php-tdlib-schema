<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of game high scores.
 */
class GameHighScores extends TdObject
{
    public const TYPE_NAME = 'gameHighScores';

    /**
     * A list of game high scores.
     *
     * @var GameHighScore[]
     */
    protected array $scores;

    public function __construct(array $scores)
    {
        $this->scores = $scores;
    }

    public static function fromArray(array $array): GameHighScores
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['scores']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->scores),
        ];
    }

    public function getScores(): array
    {
        return $this->scores;
    }
}
