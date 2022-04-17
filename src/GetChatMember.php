<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a single member of a chat
 */
class GetChatMember extends TdFunction
{
    public const TYPE_NAME = 'getChatMember';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Member identifier
     *
     * @var MessageSender
     */
    protected MessageSender $memberId;

    public function __construct(int $chatId, MessageSender $memberId)
    {
        $this->chatId = $chatId;
        $this->memberId = $memberId;
    }

    public static function fromArray(array $array): GetChatMember
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['member_id']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'member_id' => $this->memberId->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }
}
