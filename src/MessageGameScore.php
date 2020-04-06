<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new high score was achieved in a game.
 */
class MessageGameScore extends MessageContent
{
    public const TYPE_NAME = 'messageGameScore';

    /**
     * Identifier of the message with the game, can be an identifier of a deleted message.
     *
     * @var int
     */
    protected int $gameMessageId;

    /**
     * Identifier of the game; may be different from the games presented in the message with the game.
     *
     * @var string
     */
    protected string $gameId;

    /**
     * New score.
     *
     * @var int
     */
    protected int $score;

    public function __construct(int $gameMessageId, string $gameId, int $score)
    {
        parent::__construct();

        $this->gameMessageId = $gameMessageId;
        $this->gameId        = $gameId;
        $this->score         = $score;
    }

    public static function fromArray(array $array): MessageGameScore
    {
        return new static(
            $array['game_message_id'],
            $array['game_id'],
            $array['score'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_message_id' => $this->gameMessageId,
            'game_id'         => $this->gameId,
            'score'           => $this->score,
        ];
    }

    public function getGameMessageId(): int
    {
        return $this->gameMessageId;
    }

    public function getGameId(): string
    {
        return $this->gameId;
    }

    public function getScore(): int
    {
        return $this->score;
    }
}
