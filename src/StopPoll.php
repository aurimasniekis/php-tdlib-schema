<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Stops a poll. A poll in a message can be stopped when the message has can_be_edited flag set.
 */
class StopPoll extends TdFunction
{
    public const TYPE_NAME = 'stopPoll';

    /**
     * Identifier of the chat to which the poll belongs.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message containing the poll.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    public function __construct(int $chatId, int $messageId, ReplyMarkup $replyMarkup)
    {
        $this->chatId      = $chatId;
        $this->messageId   = $messageId;
        $this->replyMarkup = $replyMarkup;
    }

    public static function fromArray(array $array): StopPoll
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }
}
