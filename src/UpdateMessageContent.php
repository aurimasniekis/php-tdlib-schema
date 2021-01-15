<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message content has changed.
 */
class UpdateMessageContent extends Update
{
    public const TYPE_NAME = 'updateMessageContent';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * New message content.
     *
     * @var MessageContent
     */
    protected MessageContent $newContent;

    public function __construct(int $chatId, int $messageId, MessageContent $newContent)
    {
        parent::__construct();

        $this->chatId     = $chatId;
        $this->messageId  = $messageId;
        $this->newContent = $newContent;
    }

    public static function fromArray(array $array): UpdateMessageContent
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['new_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_id'  => $this->messageId,
            'new_content' => $this->newContent->typeSerialize(),
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

    public function getNewContent(): MessageContent
    {
        return $this->newContent;
    }
}
