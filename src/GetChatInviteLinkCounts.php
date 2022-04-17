<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns list of chat administrators with number of their invite links. Requires owner privileges in the chat
 */
class GetChatInviteLinkCounts extends TdFunction
{
    public const TYPE_NAME = 'getChatInviteLinkCounts';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): GetChatInviteLinkCounts
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
