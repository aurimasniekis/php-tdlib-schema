<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes messages
 */
class DeleteMessages extends TdFunction
{
    public const TYPE_NAME = 'deleteMessages';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifiers of the messages to be deleted
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * Pass true to try to delete messages for all chat members. Always true for supergroups, channels and secret chats
     *
     * @var bool
     */
    protected bool $revoke;

    public function __construct(int $chatId, array $messageIds, bool $revoke)
    {
        $this->chatId = $chatId;
        $this->messageIds = $messageIds;
        $this->revoke = $revoke;
    }

    public static function fromArray(array $array): DeleteMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            $array['revoke'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_ids' => $this->messageIds,
            'revoke' => $this->revoke,
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

    public function getRevoke(): bool
    {
        return $this->revoke;
    }
}
