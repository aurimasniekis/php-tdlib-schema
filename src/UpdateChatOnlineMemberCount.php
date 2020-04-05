<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The number of online group members has changed. This update with non-zero count is sent only for currently opened chats. There is no guarantee that it will be sent just after the count has changed.
 */
class UpdateChatOnlineMemberCount extends Update
{
    public const TYPE_NAME = 'updateChatOnlineMemberCount';

    /**
     * Identifier of the chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New number of online members in the chat, or 0 if unknown.
     *
     * @var int
     */
    protected int $onlineMemberCount;

    public function __construct(int $chatId, int $onlineMemberCount)
    {
        parent::__construct();

        $this->chatId            = $chatId;
        $this->onlineMemberCount = $onlineMemberCount;
    }

    public static function fromArray(array $array): UpdateChatOnlineMemberCount
    {
        return new static(
            $array['chat_id'],
            $array['online_member_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'online_member_count' => $this->onlineMemberCount,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getOnlineMemberCount(): int
    {
        return $this->onlineMemberCount;
    }
}
