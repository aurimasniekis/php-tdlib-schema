<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Updates the game score of the specified user in the game; for bots only
 */
class SetGameScore extends TdFunction
{
    public const TYPE_NAME = 'setGameScore';

    /**
     * The chat to which the message with the game belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

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

    public function __construct(int $chatId, int $messageId, bool $editMessage, int $userId, int $score, bool $force)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->editMessage = $editMessage;
        $this->userId = $userId;
        $this->score = $score;
        $this->force = $force;
    }

    public static function fromArray(array $array): SetGameScore
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
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
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'edit_message' => $this->editMessage,
            'user_id' => $this->userId,
            'score' => $this->score,
            'force' => $this->force,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
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
