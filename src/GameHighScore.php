<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains one row of the game high score table.
 */
class GameHighScore extends TdObject
{
    public const TYPE_NAME = 'gameHighScore';

    /**
     * Position in the high score table.
     */
    protected int $position;

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * User score.
     */
    protected int $score;

    public function __construct(int $position, int $userId, int $score)
    {
        $this->position = $position;
        $this->userId   = $userId;
        $this->score    = $score;
    }

    public static function fromArray(array $array): GameHighScore
    {
        return new static(
            $array['position'],
            $array['user_id'],
            $array['score'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
            'user_id'  => $this->userId,
            'score'    => $this->score,
        ];
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getScore(): int
    {
        return $this->score;
    }
}
