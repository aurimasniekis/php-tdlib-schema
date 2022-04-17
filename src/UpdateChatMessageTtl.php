<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message Time To Live setting for a chat was changed
 */
class UpdateChatMessageTtl extends Update
{
    public const TYPE_NAME = 'updateChatMessageTtl';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of message_ttl
     *
     * @var int
     */
    protected int $messageTtl;

    public function __construct(int $chatId, int $messageTtl)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageTtl = $messageTtl;
    }

    public static function fromArray(array $array): UpdateChatMessageTtl
    {
        return new static(
            $array['chat_id'],
            $array['message_ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_ttl' => $this->messageTtl,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageTtl(): int
    {
        return $this->messageTtl;
    }
}
