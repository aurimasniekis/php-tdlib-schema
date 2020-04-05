<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a private HTTPS link to a message in a chat. Available only for already sent messages in supergroups and channels. The link will work only for members of the chat.
 */
class GetMessageLink extends TdFunction
{
    public const TYPE_NAME = 'getMessageLink';

    /**
     * Identifier of the chat to which the message belongs.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): GetMessageLink
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
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
}
