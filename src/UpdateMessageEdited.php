<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message was edited. Changes in the message content will come in a separate updateMessageContent
 */
class UpdateMessageEdited extends Update
{
    public const TYPE_NAME = 'updateMessageEdited';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Point in time (Unix timestamp) when the message was edited
     *
     * @var int
     */
    protected int $editDate;

    /**
     * New message reply markup; may be null
     *
     * @var ReplyMarkup|null
     */
    protected ?ReplyMarkup $replyMarkup;

    public function __construct(int $chatId, int $messageId, int $editDate, ?ReplyMarkup $replyMarkup)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->editDate = $editDate;
        $this->replyMarkup = $replyMarkup;
    }

    public static function fromArray(array $array): UpdateMessageEdited
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['edit_date'],
            (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'edit_date' => $this->editDate,
            'reply_markup' => (isset($this->replyMarkup) ? $this->replyMarkup : null),
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

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }
}
