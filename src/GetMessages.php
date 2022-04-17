<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about messages. If a message is not found, returns null on the corresponding position of the result
 */
class GetMessages extends TdFunction
{
    public const TYPE_NAME = 'getMessages';

    /**
     * Identifier of the chat the messages belong to
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifiers of the messages to get
     *
     * @var int[]
     */
    protected array $messageIds;

    public function __construct(int $chatId, array $messageIds)
    {
        $this->chatId = $chatId;
        $this->messageIds = $messageIds;
    }

    public static function fromArray(array $array): GetMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_ids' => $this->messageIds,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
