<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Updates the game score of the specified user in a game; for bots only
 */
class SetInlineGameScore extends TdFunction
{
    public const TYPE_NAME = 'setInlineGameScore';

    /**
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * True, if the message needs to be edited
     *
     * @var bool
     */
    protected bool $editMessage;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * The new score
     *
     * @var int
     */
    protected int $score;

    /**
     * Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table
     *
     * @var bool
     */
    protected bool $force;

    public function __construct(string $inlineMessageId, bool $editMessage, int $userId, int $score, bool $force)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->editMessage = $editMessage;
        $this->userId = $userId;
        $this->score = $score;
        $this->force = $force;
    }

    public static function fromArray(array $array): SetInlineGameScore
    {
        return new static(
            $array['inline_message_id'],
            $array['edit_message'],
            $array['user_id'],
            $array['score'],
            $array['force'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'edit_message' => $this->editMessage,
            'user_id' => $this->userId,
            'score' => $this->score,
            'force' => $this->force,
        ];
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getEditMessage(): bool
    {
        return $this->editMessage;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getForce(): bool
    {
        return $this->force;
    }
}
