<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The default chat reply markup was changed. Can occur because new messages with reply markup were received or because an old reply markup was hidden by the user
 */
class UpdateChatReplyMarkup extends Update
{
    public const TYPE_NAME = 'updateChatReplyMarkup';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat
     *
     * @var int
     */
    protected int $replyMarkupMessageId;

    public function __construct(int $chatId, int $replyMarkupMessageId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->replyMarkupMessageId = $replyMarkupMessageId;
    }

    public static function fromArray(array $array): UpdateChatReplyMarkup
    {
        return new static(
            $array['chat_id'],
            $array['reply_markup_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'reply_markup_message_id' => $this->replyMarkupMessageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }
}
